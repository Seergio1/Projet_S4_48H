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

    public function logout(){
        $this->session->unset_userdata('objet');
    }
    public function afficher(){
        $moi = $this->session->userdata('objet');
        echo $moi['username'];
    }

    public function signup(){
        $info = $this->input->post();
        $this->load->model('Fonction_model');
        $result = $this->Fonction_model->sign_up($info['username'],$info['mail'],$info['pass'],$info['dtn']);
        echo json_encode($result);
    }

    public function toLogin(){
        $this->load->view('page/Sign/Login');	
    }

    public function toSignUp(){
        $this->load->view('page/Sign/profil');	
    }
}
?>