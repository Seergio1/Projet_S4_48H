<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

    public function __construct() {
		parent::__construct();
        $this->load->library('session');
	}

    public function login(){
        $info = $this->input->post();
        $this->load->model('Fonction_model');
        $result = $this->Fonction_model->check($info['mail'],$info['pass']);
        if($result!=null){
            $this->session->set_userdata('objet', $result);
        }
        echo json_encode($result);
    }

    public function Accueil(){
        if($this->session->has_userdata('objet')){
            $this->load->view('page/Sign/Login');
        }
    }

    public function logout(){
        $this->session->unset_userdata('objet');
    }
    public function afficher(){
        $moi = $this->session->userdata('objet');
        echo $moi['username'];
    }
    
    public function signup(){
        $info = $this->input->post();
        var_dump($info);
        $this->load->model('Fonction_model');
        $result = $this->Fonction_model->tousVerifier($info['poids_ideal'],$info['frequence_sport'],$info['rythme'],$info['nbr_repas'],$info['poids_actuel'],$info['email'],$info['password'],$info['dtn']);
        if($result==1){
            $i = $this->Fonction_model->insererPersonne(intval($info['taille']),intval($info['genre']));
            if($i>0){
                $this->Fonction_model->poidsPersonne($i,$info['poids_actuel']);
                if($info['maladie']!="0"){
                    $maladies = explode(",",$info['maladie']);
                    foreach ($maladies as $h) {
                        $this->Fonction_model->maladiePersonne($i,$h,count($maladies));
                    }
                }
                if($info['restriction_alimentaire']!="0"){
                    $restrictions = explode(",",$info['restriction_alimentaire']);
                    foreach ($restrictions as $r) {
                        $this->Fonction_model->allergiePersonne($i,$r,count($restrictions));
                    }
                }
                $this->Fonction_model->sign_up($info['name'],$info['email'],$info['password'],$info['dtn'],$i);
                $this->Fonction_model->insertPrevision($i,$info['objectif'],$info['poids_ideal'],$info['frequence_sport'],$info['rythme'],$info['nbr_repas'],$info['argent']);
                $resultat = $this->Fonction_model->check($info['email'],$info['password']);
                $this->session->set_userdata('objet', $resultat);
                echo json_encode($resultat);
            }
        }else{
            echo json_encode(-1);
        }
    }

    public function toLogin(){
        $this->load->view('page/Sign/Login');	
    }

    public function toSignUp(){
        $this->load->model('Fonction_model');
        $data = $this->Fonction_model->getData("profil");
        $this->load->view('page/Sign/profil',$data);	
    }
}
?>