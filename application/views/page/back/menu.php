<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/accueil.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/menu.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/'.$page.'.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/formulaire.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/fontawesome-5/css/all.css';?>">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url().'assets/js/script.js';?>" defer></script>
    <script src="<?php echo base_url().'assets/js/accueil.js';?>" defer></script>
	
	<title>Accueil</title>
</head>
<body>
	<div class="box_accueil">
		<div class="accueil_left">
			<div class="left_header">
				<div class="logo_text">SLJ</div>
				<i id="icon_nav" class="fas fa-chevron-left"></i>
			</div>
			<div class="box_rubrique" style="height: 83vh;">
				<a href="<?php echo base_url().'Admin/liens/dashboard';?>">
					<div class="rubrique_item one-menu active" >
						<i class="fas fa-passport"></i>
						<div class="rubrique_text">Dashboard</div>
					</div>
				</a>
				<a href="<?php echo base_url().'Admin/liens/regimes';?>">
					<div class="rubrique_item one-menu" >
						<i class="fas fa-apple-alt"></i>
						<div class="rubrique_text">Formulaire</div>
					</div>
				</a>
				
				<a href="<?php echo base_url().'Admin/liens/statistiques';?>">
					<div class="rubrique_item one-menu">
						<i class="fas fa-chart-line"></i>
						<div class="rubrique_text">Statistiques</div>
					</div>
				</a>

				<a href="#">
					<div class="rubrique_item one-menu">
						<i class="fas fa-h-square"></i>
						<div class="rubrique_text">Codes</div>
					</div>
				</a>

				<a href="#">
					<div class="rubrique_item one-menu">
						<i class="fas fa-cog"></i>
						<div class="rubrique_text">Parametres</div>
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
						<img class="img_user" src="../assets/image/avatar.svg">
						<i title="Se deconnecter" class="fas fa-sign-out-alt"></i>
					</div>
				</div>
			</div>

		<div class="content_accueil">
			<!-- mi-load -->
			
		</div>








