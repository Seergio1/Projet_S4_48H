<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/fontawesome-5/css/all.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/Accueil_front_office.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/box_card.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/box_facture.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/porte_monnaie.css";?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/info_user.css";?>">
    <title>Document</title>
</head>
<body>

    <nav>
		<div class="menu-icon"><span class="fas fa-bars"></span></div>
		<div class="logo">
			<img src="/assets/image/logo.png">
		</div>
		<div class="nav-items">
				<li><a href="<?php echo site_url()."MyController/liens/box_card"; ?>">Mon régime</a></li>
				<li><a href="<?php echo site_url()."MyController/liens/info_user"; ?>">Moi</a></li>

                <li><a href="<?php echo site_url()."MyController/liens/porte_monnaie"; ?>">Porte-monnaie</a></li>
		</div>
		<div class="search-icon"><span class="fas fa-search"></span></div>
		<div class="cancel-icon"><span class="fas fa-times"></span></div>
		<form action="#">
			<input style="outline: none;" type="search" class="search-data" placeholder="Rechercher" required>
			<button type="submit" class="fas fa-search"></button>
		</form>
	</nav>
    <div class="content">