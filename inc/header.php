<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" lang="fr" content="association handi'cats, handicats, association animale, animaux, adoption, chat, chatons, sauvetage, famille d'accueil, félins, handicap, famille, accueil, beaumont le roger, placement" />
	<meta name="Description" content="L'association Handi'Cats est une association qui vient en aide aux animaux abandonnés, handicapés et/ou malades.  Après une mise en quarantaine et des soins appropriés au sein de l’association, les animaux récupérés sont mis à l’adoption, si leur état le permet.">
	<meta property="og:title" content="Association Handi'Cats" />
	<meta property="og:url" content="http://www.handicats.fr/" />
	<meta property="og:image" content="http://www.handicats.fr/img/image-fond/header-logo.png"/>
	<meta name="author" lang="fr" content="alexandra vivet">
	<title><?php echo $titre; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style-<?php echo $page; ?>.css">
	<link rel="stylesheet" type="text/css" href="../css/don.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<script type="text/javascript" src="../script/jquery.js"></script>
	<script type="text/javascript" src="../script/konami.js"></script>


</head>

<body>
	<header>
		<div class="contener-logo" id="retour-haut">
			<div class="logo">
				<img src="../img/image-fond/header-logo.png" alt="Logo Handicat's" />
			</div>
			<div class="logo-mobile">
				<img src="../img/image-fond/logo-mobile.png" alt="Logo Handicat's pour mobile et tablette" />
			</div>
		</div>
	</header>


	<!-- **************************** NAV *************************- -->


	<nav id="nav-site" role="navigation">
		<ul class="menu">
			<li><a href="../accueil/">Accueil</a></li>
			<li><a href="../adoption/">Nos chats</a>
				 <ul class="sub-menu">
					<li><a href="../adoption/">Adoption</a></li>
					<li><a href="../soin/">En soin</a></li>
					<li><a href="../apresadoption/">La vie après l'adoption</a></li>
					<li><a href="../sauvetage/">Sauvetage d'ici et d'ailleurs</a></li>
				</ul>
			</li>
			<li><a href="../construction">Boutique</a>
				<ul>
					<li><a href="../construction">Bijoux</a></li>
					<li><a href="../construction">Papeteries</a></li>
					<li><a href="../construction">Objets "Fait main"</a></li>
					<li><a href="../construction">Tout pour la maison</a></li>
					<li><a href="../construction">Produits dérivés</a></li>
					<li><a href="../construction">Livres</a></li>
				</ul>
			</li>
			<li><a href="../video/">Vidéo</a></li>
			<li><a href="../accueil/#partie-contact">Contact</a></li>
		</ul>
		<hr>
	</nav>


	<!-- **************************** NAV BURGER *************************- -->

	<nav id="nav-burger" role="navigation">
		<div id="menuToggle">
  			<!--
    		A fake / hidden checkbox is used as click reciever,
    		so you can use the :checked selector on it.
    		-->
    		<input type="checkbox" />
    		<!--
    		Some spans to act as a hamburger.
    		They are acting like a real hamburger,
    		not that McDonalds stuff.
    		-->
    		<span></span>
    		<span></span>
			<span></span>

			<ul id="menu">
				<li><a href="../accueil/">Accueil</a></li>
				<li><a href="../adoption/">Animaux</a>
					<ul id="sub-menu-animaux">
						<li><a href="../adoption/">Adoption</a></li>
						<li><a href="../soin/">En soin</a></li>
						<li><a href="../apresadoption/">La vie après l'adoption</a></li>
						<li><a href="../sauvetage/">Sauvetage d'ici et d'ailleurs</a></li>
					</ul>
				</li>
				<li><a href="../construction">Boutique</a>
					<ul id="sub-menu-boutique">
						<li><a href="../construction">Bijoux</a></li>
						<li><a href="../construction">Papeteries</a></li>
						<li><a href="../construction">Objets "Fait main"</a></li>
						<li><a href="../construction">Tout pour la maison</a></li>
						<li><a href="../construction">Produits dérivés</a></li>
						<li><a href="../construction">Livres</a></li>
					</ul>
				</li>
				<li><a href="../video/">Vidéo</a></li>
				<li><a href="../accueil/#partie-contact">Contact</a></li>
			</ul>
		</div>
	</nav>

	<!-- <div id="haut-de-page">
		<a href="#retour-haut">
			<img src="../img/icone/retour-haut.png" alt="image retour haut de la page">
		</a>
	</div> -->
	<!-- <video id="Video1" >
		<iframe width="560" height="315" src="https://www.youtube.com/embed/HBfy_kjkt4I" frameborder="0" allowfullscreen></iframe>
	</video>	 -->
