<?php
    $option = array();
    $option['dashboard'] = '';
    $option['regimes'] = '';
    $option['statistiques'] = '';
    $option[$page] = ' active';
    $option['page'] = $page;
    $this->load->view('page/back/menu',$option);
    $this->load->view('page/back/'.$page);
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets/demo/chart-area-demo.js';?>" defer></script>
<script src="<?php echo base_url().'assets/demo/chart-bar-demo.js';?>" defer></script>
<script src="<?php echo base_url().'assets/demo/chart-pie-demo.js';?>" defer></script>

</body>


<!-- form -->
<div class="formular6" value="comptes">
	<div class="clone-body"></div>
	<div class="content">
		<h1>Voulez-vous supprimez cette oeuvre?</h1>
			<div class="choice">
				<div class="bouton">
					<button type="submit" onclick="valider()">Oui</button>
				</div>
				<div class="bouton">
					<button type="submit" onclick="annuler()">Non</button>
				</div>
			</div>
	</div>
</div>


<div class="formular7 " value="comptes">
	<div class="clone-body"></div>
	<div class="content">
        <div class="box_repas">
            <div class="menu_repas">
                <div class="menu_item" onclick="changeBody(0);">Petit dejeuner</div>
                <div class="menu_item" onclick="changeBody(1);">Dejeuner</div>
                <div class="menu_item" onclick="changeBody(2);">Diner</div>
                
            </div>
        </div>
		<h1>Liste des plats</h1>
			<div class="choice choix">
                <div class="choix_1">
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <input type="button" id="btn_plat1" value="Valider">
                </div>
			</div>
	</div>
</div>

<!-- form regime -->
<div class="formular5" value="comptes">
	<div class="clone-body">	
		<div class="fermer">
			<i class="fa fa-times"></i>
		</div>
	</div>
        <div class="content ">
            <h1>Ajout regime</h1>
            <div class="ajout_facture">
                <div class="_1">
                    <div class="info_client_facture">
                        <div class="ajout_facture_item">
                            <div class="label_facture">Nom</div>
                            <input type="text" name="nom" id="">
                        </div>
                        <div class="ajout_facture_item">
                            <div class="label_facture">Decsription</div>
                            <textarea rows="6" cols="40" name="description" id=""></textarea>
                        </div>
                        <div class="ajout_facture_item">
                            <div class="label_facture">Choisir les plats</div>
                            <input type="submit" name="plats" id="plats" value="Voir les plats">
                        </div>
                    </div>
                </div>
                </div>
                    <input class="btn_facture_modifier" type="button" value="valider">
                </div>
        </div>
	</div>
</div>
<!-- form plat -->
<div class="formular5" value="comptes">
	<div class="clone-body">	
		<div class="fermer">
			<i class="fa fa-times"></i>
		</div>
	</div>
        <div class="content ">
            <h1>Ajout regime</h1>
            <div class="ajout_facture">
                <div class="_1">
                    <div class="info_client_facture">
                        <div class="ajout_facture_item">
                            <div class="label_facture">Nom</div>
                            <input type="text" name="nom" id="">
                        </div>
                        <div class="ajout_facture_item">
                            <div class="label_facture">Decsription</div>
                            <textarea rows="6" cols="40" name="description" id=""></textarea>
                        </div>
                        <div class="ajout_facture_item">
                            <div class="label_facture">Choisir les plats</div>
                            <input type="submit" name="plats" id="" value="Voir les plats">
                        </div>
                    </div>
                </div>
                </div>
                    <input class="btn_facture_modifier" type="button" value="valider">
                </div>
        </div>
	</div>
</div>

<div class="formular5 " value="comptes">
	<div class="clone-body">	
		<div class="fermer">
			<i class="fa fa-times"></i>
		</div>
	</div>
    <div class="content ">
        <h1>Modifier oeuvre</h1>
        <div class="ajout_facture">
            <div class="_1">
                <div class="info_client_facture">
                    <div class="ajout_facture_item">
                        <div class="label_facture">Nom</div>
                        <input type="text" name="representant" id="">
                    </div>
                    <div class="ajout_facture_item">
                        <div class="label_facture">Titre</div>
                        <input type="text" name="phone" id="">
                    </div>
                    <div class="ajout_facture_item">
                        <div class="label_facture">Decsription</div>
                        <textarea rows="6" cols="70" name="adresse_societe_client" id=""></textarea>
                    </div>
                    <div class="ajout_facture_item">
                        <div class="label_facture">Image</div>
                        <input type="file" name="societe_client" id="">
                    </div>
                </div>
            </div>
            </div>
                <input class="btn_facture_modifier" type="button" value="valider">
            </div>
        </div>
    </div>
</div>


</html>
