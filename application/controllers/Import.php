<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {
    // private $tab_ecriture;

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->tab_ecriture = array(array());
	// }
	public function importer(){
        $this->load->model('Import_model');
        $this->load->library('upload');

        $fichier =$this->input->get('mon_fichier');
        $dossier = $_SERVER['DOCUMENT_ROOT'] ."SI/excel/".$fichier;
        var_dump($dossier);
        $this->Import_model->excel($dossier);
        redirect('welcome/liens/compte');
    }	

    public function afficher(){
        $moi = $this->session->userdata('objet');
        echo $moi['username'];
    }

}
