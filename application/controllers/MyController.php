<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {

    public function Monsite(){
        $this->load->view('page/other/vitrine');	
    }

    public function liens($page){
        $this->load->model('Fonction_model');
        $data = $this->Fonction_model->getDatas($page);
        $this->load->view('page/other/Affichage',$data);
    }
    public function VersPage($page){
        $this->load->model('Fonction_model');
        $data = $this->Fonction_model->getData($page);
        $this->load->view('page/other/vitrine');
    }
}
?>