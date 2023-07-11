<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Admin_model extends CI_Model{

        public function getDatas($page){
            $data = array();
            // if($page=='accueil'){
            //     $pro=$this->getObject('profil');
            //     $data['profil'] = $pro[0];
            //     $comp = $this->getObject('comptas');
            //     $data['compta'] = $comp[0];
            //     $num = $this->getObject('numero');
            //     $data['numero'] = $num[0];
            // }else if($page=='journal'){
            //     $data['journaux'] = $this->getObject('code_journal');
            // }
            $donne = array();
            $donne['page'] = $page;
            $donne['data'] = $data;
            return $donne;
        }

    }
?>    
