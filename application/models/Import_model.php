<?php 
require_once 'D:/L2/WEB/UwAmp/www/SI/PHPExcel-1.8/Classes/PHPExcel.php';


    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Import_model extends CI_Model{

        public function excel($chemin){
            $this->load->model("Fonction_model");
            $excel_file = $chemin;
            $excel = PHPExcel_IOFactory::load($excel_file);
            $i = 0;
            $feuille = $excel->getActiveSheet();
            foreach ($feuille->getRowIterator() as $ligne) {
                $donnees = array();
                $donnees = $ligne->getCellIterator();
                $colonne1 = $donnees->current()->getValue();
                $donnees->next();
                $colonne2 = $donnees->current()->getValue();
                $donnees->next();
                $colonne3 = $donnees->current()->getValue();
                echo "colonne3:   ".$colonne3."   ";
                $colonne3 = $this->Fonction_model->selectIdComptes($colonne3);
                $donnees->next();
                $colonne4 = $donnees->current()->getValue();
                $colonne4 = $this->Fonction_model->selectIdAux($colonne4);
                $donnees->next();
                $colonne5 = $donnees->current()->getValue();
                $donnees->next();
                $colonne6 = $donnees->current()->getValue();
                $donnees->next();
                $colonne7 = $donnees->current()->getValue();
                $donnees->next();
                $colonne8 = $donnees->current()->getValue();
                $sql = "INSERT INTO ecriture VALUES (default,'%s',%s,%s,'%s',%s,%s,'%s',%s,%s,%s,'%s')";
                $rep = sprintf($sql,$colonne1,2,1,pg_escape_string($colonne2),$colonne3,$colonne4,$colonne6,1,$colonne7,$colonne8,$colonne1);
                $this->db->query($rep);

            }
        }

    }
?>    
