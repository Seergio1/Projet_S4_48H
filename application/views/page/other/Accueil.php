<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/fontawesome-5/css/all.css" ;?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/Accueil.css";?>">
	<link rel="stylesheet" href="<?php echo base_url() . "assets/css/box_card.css";?>">
	<link rel="stylesheet" href="<?php echo base_url() . "assets/css/box_facture.css";?>">

	<title>Accueil</title>
</head>
<body>
	<div class="box_accueil">
		<div class="accueil_left">
			<div class="left_header">
				<!-- <img class="logo_text" src="<?php echo base_url() . "assets/image/logo1.png";?>"> -->
				<div class="logo_text">SLJ</div>
				<i id="icon_nav" class="fas fa-chevron-left"></i>
			</div>

			<div class="box_rubrique">

				

				<a href="#">
					<div class="rubrique_item" >
						<i class="fas fa-passport"></i>
						<div class="rubrique_text">Product</div>
					</div>
				</a>
				<a href="#">
					<div class="rubrique_item" >
						<i class="fas fa-user"></i>
						<div class="rubrique_text">Users</div>
					</div>
				</a>
				
				<a href="#">
					<div class="rubrique_item">
						<i class="fas fa-chart-line"></i>
						<div class="rubrique_text">Statistique</div>
					</div>
				</a>

				<a href="#">
					<div class="rubrique_item">
						<i class="fas fa-h-square"></i>
						<div class="rubrique_text">Facture</div>
					</div>
				</a>

			</div>
			
		</div>

		<div class="accueil_right">
			<div class="head_acceuil">
				<div class="box_search">
					<i class="fas fa-search"></i>
					<input type="text" name="recherche" placeholder="Rechercher...">
				</div>
				<div class="box_profil">
					<div class="info_user">
						<div class="nom_user">Sergio</div>
						<img class="img_user" src="<?php echo base_url() . "assets/image/avatar.svg";?>">
						<i title="Se deconnecter" class="fas fa-sign-out-alt"></i>
					</div>
				</div>
			</div>

		<div class="content_accueil">
				
				<!-- eto no apetraka ny content -->
				<div class="item-content">
					
				</div>
				<!-- farany -->
		</div>


	</div>
</body>

</html>



<script type="text/javascript" src="<?php echo base_url() . "assets/js/fonction.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/accueil.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/facture.js";?>"></script>



