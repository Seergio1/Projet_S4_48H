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
			<img src=".base_url()./assets/image/logo.png">
		</div>
		<div class="nav-items">
				<li><a href="#">Mon régime</a></li>
				<li><a href="#">Moi</a></li>

                <li><a href="#">Porte-monnaie</a></li>
		</div>
		<div class="search-icon"><span class="fas fa-search"></span></div>
		<div class="cancel-icon"><span class="fas fa-times"></span></div>
		<form action="#">
			<input style="outline: none;" type="search" class="search-data" placeholder="Rechercher" required>
			<button type="submit" class="fas fa-search"></button>
		</form>
	</nav>
    <div class="content">
        <!-- eto no apetraka ny content hafa -->
        
    </div>

    
    
    
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="#">Mon régime</a></li>
                        <li><a href="#">Moi</a></li>
                        <li><a href="#">Porte-monnaie</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Developper</h4>
                    <ul>
                        <li><a href="#">RAJAOHARINIAINA Sergio ETU001811</a></li>
                        <li><a href="#">RAFANOMEZANTSOA Jeremia ETU0022</a></li>
                        <li><a href="#">ANDRAINA Liantsoa ETU001905</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

      <script src="<?php echo base_url()."assets/js/accueil_front_office.js";?>"></script>
      <script src="<?php echo base_url()."assets/js/porte_monnaie.js";?>"></script>
</body>
</html>