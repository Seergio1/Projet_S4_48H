<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Fonction_model extends CI_Model{

        public function verifierInscription($mail,$motpasse,$daty){
            $result = $this->check($mail,$motpasse);
            if($result!=-1){
                return "Existant";
            }
            if(strlen($motpasse)<6){
                return "mot de passe trop court";
            }
            $date = new DateTime();
            $date->sub(new DateInterval('P18Y'));
            $date1 = new DateTime($daty);
            if($date1>$date){
                return "date incorrect";
            }
            return 1;
        }
        public function sign_up($username,$mail,$motpasse,$daty,$idPersonne){
            $req = "INSERT INTO utilisateur VALUES(default,'%s','%s','%s','%s',%s,NOW())";
            $fin = sprintf($req,$username,$mail,$motpasse,$daty,$idPersonne);
            $this->db->query($fin);
            return 1;
        }


        public function insererPersonne($taille,$genre){
            if($taille<120){
                return "taille trop petit";
            }

            if($genre!= 'f' || $genre!='m'){
                return "erreur sur le genre";
            }
            $req = "INSERT INTO personne VALUES(default,%s,'%s')";
            $fin = sprintf($req,$taille,$genre);
            $this->db->query($fin);
            return $this->getLastIdTable('personne');
        }

        public function poidsPersonne($idpersonne,$poids){
            $req = "INSERT INTO personnePoids VALUES(default,%s,%s,NOW())";
            $fin = sprintf($req,$idpersonne,$poids);
            $this->db->query($fin);
            return 1;
        }

        public function allergiePersonne($idpersonne,$idallergie,$nombre){
            $req = "INSERT INTO allergiepersonne VALUES(default,%s,%s,%s,NOW())";
            $fin = sprintf($req,$idpersonne,$idallergie,$nombre);
            $this->db->query($fin);
            return 1;
        }

        public function maladiePersonne($idpersonne,$idmaladie,$nombre){
            $req = "INSERT INTO maladiepersonne VALUES(default,%s,%s,%s,NOW())";
            $fin = sprintf($req,$idpersonne,$idmaladie,$nombre);
            $this->db->query($fin);
            return 1;
        }

        public function getLastIdTable($table){
            $req = "SELECT id%s FROM %s ORDER BY id%s DESC LIMIT 1";
            $requete = sprintf($req,$table,$table,$table);
            $resultat = $this->db->query($req);
            $id = $resultat->row_array();
            return $id['id'.$table];
        }
        
        public function tousVerifier($poidsIdeal,$hab,$vitesse,$nbmanger,$poids,$mail,$motpasse,$daty){
            $verif = $this->verifierInscription($mail,$motpasse,$daty);
            if($verif!=1){
                return $verif;
            }
            $verif = $this->verifierPersonne($poidsIdeal,$hab,$vitesse,$nbmanger,$poids);
            if($verif!=1){
                return $verif;
            }
            return 1;
        }

        public function verifierPersonne($poidsIdeal,$hab,$vitesse,$nbmanger,$poids){
            if($poidsIdeal<30){
                return "poids trop petit";
            }
            if($hab<0){
                return "habitude doit etre superieur ou egal a 0";
            }
            if($vitesse<0){
                return "vitesse doit etre superieur ou egal a 0";
            }
            if($nbmanger<=1){
                return "il faut toujous manger au moins 2 fois par jour";
            }
            if($poids<30){
                return "poids trop petit";
            }
            return 1;
        }

        public function insertPrevision($idPersonne,$idObjectif,$poidsIdeal,$hab,$vitesse,$nbmanger){
            $req = "INSERT INTO prevision VALUES(default,%s,%s,%s,%s,%s,%s,NOW())";
            $fin = sprintf($req,$idPersonne,$idObjectif,$poidsIdeal,$hab,$vitesse,$nbmanger);
            $this->db->query($fin);
            return 1;
        }
        public function check($mail,$pass){
            $req = "SELECT * FROM utilisateur WHERE mail = '%s' AND motpasse = '%s'";
            $requete = sprintf($req,$mail,$pass);
            $resultat = $this->db->query($requete);
            if($resultat == null){
                return -1;
            }
            return $resultat->row_array();
         }
         
         public function getObject($table){
            $req = "SELECT * FROM ".$table;
            $resultat = $this->db->query($req);
            return $resultat->result_array();
         }

}

?>