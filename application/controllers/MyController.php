<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {

    public function Monsite(){
        $this->load->view('page/other/vitrine');	
    }
}
?>