<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ."assets/css/Login.css";?>">
    <link rel="stylesheet" href="<?php echo base_url() ."assets/css/profil.css";?>">
    <title>Profil</title>
</head>
<body>
    <script src="<?php echo base_url() ."assets/js/jquery-3.7.0.js";?>"></script>
	<script src="<?php echo base_url() ."assets/js/parsley.min.js";?>"></script>
    <p id="url" value="<?php echo base_url(); ?>"></p>
    <div class="box_profil">
        
            <div class="etape e1 active">
                <div class="etape_titre">Bienvenue</div>
                <div class="etape_sous_titre">Alors, qu'est-ce qui vous amène ici ?</div>
                <?php
                foreach ($objectifs as $objectif) {
                ?>
                <div value="<?php echo $objectif['idobjectif']; ?>" class="etape_item"><?php echo $objectif['libele']; ?></div>
                <?php } ?>
                <button name="suivant1" id="button_next" onclick="suivant(0)">Suivant</button>
            </div>
    
             <div class="etape e2">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                   
                </div>
                <div class="box_all_genre">
                    <div class="label">Quel est votre genre ?</div>
                    <div class="box_genre">
                        <div value="1">Masculin</div>
                        <div value="2">Féminin</div>
                    </div>
                </div>
               
                <div class="box_input age">
                    <div class="label">Quel âge avez-vous ?</div>
                    <input type="text" name="age" id="age">
                    <div class="erreur">Vous devez être agé d'au moins 18 ans</div>
                </div>
                <div class="box_input taille">
                    <div class="label">Quelle est votre taille ?</div>
                    <input type="text" name="taille" id="taille">
                    <div class="erreur">La taille doit être comprise entre 140 et 250</div>
                </div>
                <div class="box_input poids">
                    <div class="label">Quelle est votre poids actuel ?</div>
                    <input type="text" name="poids" id="poids">
                    <div class="erreur">Le poids doit être comprise entre 30 et 150</div>
                </div>
                <div class="all_boutons">
                    <button name="precedent2" id="button_next" onclick="precedent(1)">Précédent</button>
                    <button name="suivant2" id="button_next" onclick="suivant(1)">Suivant</button>
                </div> 
                
            </div> 
    
             <div class="etape e3">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    
                </div>
                <div class="etape_sous_titre">Avez-vous des réstrication alimentaire ?</div>
                <?php
                foreach ($restrictions as $restriction) {
                ?>
                <div value="<?php echo $restriction['idallergie']; ?>" class="etape_item"><?php echo $restriction['libele']; ?></div>
                <?php } ?>
                <div value="<?php echo $restrictions[count($restrictions)-1]['idallergie']+1; ?>" class="etape_item aucun">Aucune</div>
                <div class="all_boutons">
                    <button name="precedent3" id="button_next" onclick="precedent(2)">Précédent</button>
                    <button name="suivant3" id="button_next" onclick="suivant(2)">Suivant</button>
                </div> 
            </div> 
    
             <div class="etape e4">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    
                </div>
                <div class="etape_sous_titre">Etes-vous atteint de maladie(s) ?</div>
                <?php
                foreach ($maladies as $maladie) {
                ?>
                <div value="<?php echo $maladie['idmaladie']; ?>" class="etape_item"><?php echo $maladie['libele']; ?></div>
                <?php } ?>
                <div value="<?php echo $maladies[count($maladie)-1]['idmaladie']+1; ?>" class="etape_item aucun2">Aucune</div>
                <div class="all_boutons">
                    <button name="precedent4" id="button_next" onclick="precedent(3)">Précédent</button>
                    <button name="suivant4" id="button_next" onclick="suivant(3)">Suivant</button>
                </div> 
            </div> 
    
             <div class="etape e5">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div></div>
                    <div></div>
                    <div></div>
                   
                </div>
                <div class="box_input frequence">
                    <div class="label">Combien d'heure(s) par semaine, faites-vous du sport ?</div>
                    <input type="number" name="frequence_sport" id="frequence_sport">
                    <div class="erreur">Vous devez entrer une valeur</div>
                </div>
                
                <div class="all_boutons">
                    <button name="precedent5" id="button_next" onclick="precedent(4)">Précédent</button>
                    <button name="suivant5" id="button_next" onclick="suivant(4)">Suivant</button>
                </div> 
            </div> 
    
             <div class="etape e6">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div></div>
                    <div></div>
                    
                </div>
    
                <div class="etape_sous_titre">Combien de fois vous mangez par jour ?</div>
                <div value="2" class="etape_item">(2) petit déjeuner+déjeuner</div>
                <div value="3" class="etape_item">(3) petit déjeuner+déjeuner+dîner</div>
                <div value="4" class="etape_item">(4) petit déjeuner+déjeuner+dîner+colation</div>
                <div value="5" class="etape_item">(5) petit déjeuner+colation+déjeuner+colation+dîner</div>
                <div class="all_boutons">
                    <button name="precedent6" id="button_next" onclick="precedent(5)">Précédent</button>
                    <button name="suivant6" id="button_next" onclick="suivant(5)">Suivant</button>
                </div> 
            </div> 
    
             <div class="etape e7">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div></div>
                    
                </div>
                <div class="box_all_genre">
                    <div class="label">L'argent est-il un frein pour le choix de votre régime ?</div>
                    <div class="box_argent">
                        <div value="oui">OUI</div>
                        <div value="non">NON</div>
                    </div>
                </div>
               
                <div class="all_boutons">
                    <button name="precedent7" id="button_next" onclick="precedent(6)">Précédent</button>
                    <button name="suivant7" id="button_next" onclick="suivant(6)">Suivant</button>
                </div> 
            </div> 
    
             <div class="etape e8">
                <div class="progession">
                    <div class="act_prog">.</div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    <div class="act_prog"></div>
                    
                </div>
                <div class="box_input rythme">
                    <div class="label">A quel rythme voulez-vous progressez ?</div>
                    <input id="rythme" type="range" min="1" max="3">
                    <div class="range_value">
                        <div>Doucement</div>
                        <div>Normalement</div>
                        <div>Rapidement</div>
                    </div>
                </div> 
                <div class="box_input poids_ideal">
                    <div class="label">Quel est votre poids idéal ?</div>
                    <input type="number" name="poids" id="poids_ideal">
                    <div class="erreur"></div>
                </div>
               
                <div class="all_boutons">
                    <button name="precedent8" id="button_next" onclick="precedent(7)">Précédent</button>
                    <button name="suivant8" id="button_next" onclick="suivant(7)">Suivant</button>
                </div> 
                
            </div> 

        
    </div>

    <div class="container">
		<div class="forms-container">
		  <div class="signin-signup">
			<form id="demo-form_2"  class="sign-in-form" >
                <h2 class="title">Sign up</h2>
			  <div class="input-field">
				<i class="fas fa-user"></i>
				<input id="username" type="text" placeholder="Username"  required=""/>
			  </div>
			  <div class="input-field">
				<i class="fas fa-envelope"></i>
				<input id="email" type="email" placeholder="Email"  required=""/>
			  </div>
			  <div class="input-field">
				<i class="fas fa-lock"></i>
				<input id="password" type="password" placeholder="Password"   required=""/>
			  </div>
			  <div class="input-field">
				<i class="fas fa-calendar"></i>
				<input id="dtn" type="date" placeholder="Date de naissance"   required=""/>
			  </div>
			  <input id="btn_inscri_front_office" type="button"  class="btn" value="Sign up" />
                
              </form>
			
		  </div>
		</div>
  
		<div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                  <h3>Vous êtes nouveau?</h3>
                  <p>
                    Inscrivez vous parmis nous
                  </p>
                </div>
                <img src="<?php echo base_url() ."assets/image/log.svg";?>" class="image" alt="" />
              </div>
	  </div>
    <script src="<?php echo base_url() ."assets/js/profil.js";?>"></script>
    <script src="<?php echo base_url() ."assets/js/traitement_login.js";?>"></script>
</body>
</html>