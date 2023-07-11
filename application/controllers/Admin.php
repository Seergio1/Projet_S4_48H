<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		redirect('welcome/liens/accueil');
	}	

	public function liens($chemin){
		$this->load->model('Admin_model');
		$data = $this->Admin_model->getDatas($chemin);
		$this->load->view('page/back/affichage',$data);	
	}
}
?>