<?php
session_start();  
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
	<script src="https://use.fontawesome.com/d3028f0b61.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
	<link rel="shortcut icon" href="https://i2.cdscdn.com/pdt2/6/8/0/1/700x700/sch4005086700680/rw/samourai.jpg"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<link rel="preconnect">	
	<meta name="description" content="Venez découvrir l'univers des samourai!"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
</head>
<body>
	<div id="h_main">
	<nav id="h_container">
		<ul>
			<li>Menu
				<ul>
					<li><a href="index.php"> Home </a></li>
					<li>
						<?php
					if (!isset($_SESSION["id"])){
						echo '<a href="inscription.php">';
						echo 'Inscription';
						echo '</a>';
					}
					else{
						echo '';
					}
					?>
					</li>
					<li>
						<?php
							if (!isset($_SESSION["id"])) { 	
								echo '<a href="connexion.php">Connexion</a>';
							} 
							else{
								echo '<form method="post"> <input type="submit" name="Déconnexion" value="Déconnexion"> </form>';
						     	   if(isset($_POST["Déconnexion"])){
         							 session_unset();
         							 header('location:index.php');
     							}
							}
						?>
					</li>
					<li><a href="profil.php"> Profil </a></li>
					<li><a href="admin.php"> Admin </a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
<header id="header_index">
	<div id="divtitle">
		<div id="title">
			<h1>Samouraï</h1>
		</div>
	</div>
</header>
<main id="main_index">
	<div id="main_1">
		<p>Le terme « samouraï », mentionné pour la première fois dans un texte du xe siècle, vient du verbe saburau qui signifie « servir ». L'appellation est largement utilisée dans son sens actuel depuis le début de la période Edo, vers 1600. Auparavant, on désignait les guerriers plutôt par les termes mono no fu (jusqu'au viiie siècle), puis tsuwamono (強者?)1 ou bushi (武士?), qui peuvent l'un ou l'autre se traduire par « homme d'armes ».
		« Devant l’effacement de l’état impérial et la montée de l’insécurité […], la militarisation de ces notables devient la norme […] ils commencèrent à regrouper des hommes d'armes entrainés [tsuwamono], en créant des bandes de guerriers [bushidan] dans le cadre des relations familiales. […] La guerre privée devint alors le meilleur moyen de régler un différend avec son voisin. […]. On assista alors, au cours des xie et xiie siècles à la montée puis à l'hégémonie […] d'une couche sociale de spécialistes de la guerre, désigné sous le nom de Bushi (guerriers) ou samouraïs. […] caractérisaient par des liens d'hommes à hommes, notamment de relations de vassalité, et, imposaient un système de privilèges hiérarchisés sur la terre. […]. Une féodalité dans la rizière en quelque sorte. À la fin du xiie siècle, ces guerriers se regroupèrent dans deux organisations vassaliques majeures : les Taira et les Minamoto5. »</p>
	</div>
	<div id="main_2">
		<p>Après leur victoire, les Minamoto « fondèrent en 1185 un nouveau régime politique à Kamakura dans les provinces orientales […]. Le chef de ce régime, le Shôgun, fut reconnu par l’empereur comme seul responsable de l’ordre militaire et policier. […] Le Shogunat se déplaça à Kyoto vers 1336 et s'installa en 1378 définitivement dans le quartier de Muromachi […]. Cette structure bicéphale qui réunit l'est et l'ouest du japon correspond à une alliance entre la noblesse de la cour de Kyoto, les grands monastères bouddhistes et les grands vassaux guerriers du shôgun […]. Cette alliance fonctionna7 […] avant son délitement avec les guerres seigneuriales d’Ônin (1467-1477) et laissant place à une franche anarchie politique »8.

		Avec la pacification de la période Edo, la fonction combattante des guerriers diminue et ceux-ci deviennent des fonctionnaires. Ils vont laisser le côté guerrier pour les cérémonies, et commencer à s'intéresser aux arts (surtout l'écriture). Néanmoins, probablement pour se redonner de la valeur, des règles très strictes sont codifiées, sous le nom de bushidō (« voie du guerrier », mise en place dès le xvie siècle). Le suicide rituel du seppuku — aussi connu sous le nom de « hara-kiri » (littéralement « ouvrir le ventre ») — devra être interdit à certaines périodes par le shogun (seigneur militaire du Japon).

		En effet, pour sauvegarder son honneur, un samouraï devait se faire seppuku s'il arrivait malheur à son maître, à sa famille, ou simplement s'il avait fait une faute grave, son seigneur pouvait lui commander à n'importe quel moment le seppuku s'il ne s'estimait pas satisfait. Ce rite provoquait parfois des ravages dans les rangs des samouraïs.</p>
	</div>
	<div id="main_3">
		<p>En 935, Taira no Masakado, gouverneur de la province de Shimosa, tua son oncle Kunika et rallia à lui de nombreux guerriers, gagnant ainsi le contrôle de la quasi-totalité du Kantō et s'autoproclama empereur en 939. La même année, sur les côtes de la mer intérieure, Fujiwara no Sumitomo rassembla des wakō (pirates) et se révolta également.

		Le gouvernement n'eut pas de mal à réprimer ces premières révoltes samouraïs, se contentant d'engager d'autres clans pour lutter contre les premiers, lors de ce qui fut désigné comme rébellion de Jōhei Tengyō.

		En 1028, Taira no Tadatsune se révolta également et prit le contrôle du Kantō. La cour tarda alors à réagir, selon Louis Frédéric (Le Japon, dictionnaire et civilisation, [p. 1073]), « les forces impériales [étaient] trop faibles pour intervenir efficacement contre lui ». Au bout de quatre mois, cependant, la cour envoya contre lui Taira no Naokata, qui fut vaincu. En 1031, Minamoto no Yorinobu se joignit aux forces de pacification impériale, obligea Tadatsune à se rendre, et prit le contrôle du Kantō.

		Par la suite, les familles de samouraïs les plus influentes, notamment les Taira et les Minamoto, furent appelées à la cour pour assurer la sécurité de l'empereur et de l'aristocratie, avec qui ils tissèrent peu à peu des liens, bien que gardant un statut très bas. Les jōkō, notamment, s'entouraient de gardes du corps samouraïs à demeure dans leur palais, les hokumen no bushi (ce qu'on peut traduire par « samouraïs du côté nord »).

		Guerres dans le nord de Honshū
		Dans les provinces du Tōhoku, la partie nord de l'île de Honshū, plus récemment colonisée et loin de la capitale, des seigneurs tentaient d'échapper à l'influence de la cour. En 1051, Abe no Yoritoki se souleva et la province de Mutsu fut secouée par les affrontements de la guerre de Zenkunen, qui dura en réalité jusqu'en 1062, le général des forces impériales, Minamoto no Yoriyoshi (fils de Yorinobu) ayant fait appel au clan Kiyohara de la province de Dewa. La cour attribua les biens du clan Abe à ces derniers, et, lorsqu'en 1083, Minamoto no Yoshiie, fils de Yoriyoshi, fut nommé juge dans une querelle interne des Kiyohara, il en profita pour les détruire au cours de ce qu'on appelle la guerre de Gosannen. Estimant qu'il avait agi pour des raisons personnelles, la cour refusa de lui attribuer une récompense et il dut prélever des parcelles sur son propre domaine pour payer ses hommes. Selon Mitsuo Kure (Samouraïs, p. 14), cet acte le rendit très populaire et de nombreuses familles de samouraïs se mirent à son service.</p>
	</div>  
</main>
<footer>						<!-- FOOTER -->
		<div id="container1_footer">
			<div id="icone">		
				<a href="#">
					<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-snapchat-square fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-twitch fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div id="container2_footer">
			<div id="footer_centre_titre">
				<p>Samouraï</p>
			</div>
		</div>
		<div id="container3_footer">
			<p>Evan Azemard</p>
		</div>
	</footer>
</body>
</html>