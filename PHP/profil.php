<?php
include("donne.php");
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
	<meta name="description" content="Inscrivez vous ches les samouraï"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
</head>
<body id="body_inscription">
<div id="h_main">
	<nav id="h_container">
		<ul>
			<li>Menu
				<ul>
					<li><a href="index.php"> Home </a></li>
					<li>
						<?php
					if (!isset($_SESSION)){
						echo '<a href="inscription.php"> Inscription </a>';
					}
					else{
						echo '';
					}
					?>
					</li>
					<li><?php
							if (!isset($_SESSION["id"])) { 	
								echo ""; 
								header('Location: connexion.php?');
							} 
							else{
								echo '<form method="post"> <input type="submit" name="Déconnexion" value="Déconnexion"> </form>';
						     	   if(isset($_POST["Déconnexion"])){
         							 session_unset();
         							 header('location: index.php');
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
<header id="header_inscription">
	<div id="divtitle">
		<div id="title">
			<h1>Samouraï</h1>
		</div>
	</div>
</header>
<main id="main_inscription">
	<div id="centre_main">
		<form method="post" > 
			<div class="divform">
				<div id="containerb">
					<div class="title_form_section">
						<label for="name">Nouveau prénom :</label><br>
						<input type="text" id="n_prenom" name="n_prenom" placeholder="<?php echo $_SESSION["prenom"]; ?>"><br> 
						<label for="name">Nouveau nom :</label><br>
						<input type="text" id="n_nom" name="n_nom" placeholder="<?php echo $_SESSION["nom"]; ?>"><br>
	 					<label for="name">Nouveau pseudo :</label><br>
	       				<input type="text" id="n_pseudo" name="n_pseudo" placeholder="<?php echo $_SESSION["username"]; ?>"><br>
	        			<label for="name">Nouveau mot de passe :</label><br>
	        			<input type="password" id="n_password" name="n_password" placeholder= "<?php echo $_SESSION["password"]; ?>"><br>
	       				<label for="inscription">Valider</label><br>       
	       				<input type="submit" name="valider" value=Valider>
					</div>
				</div>
			</div>
		</form>	
	</div>
</main>
<?php	
if (!isset($_SESSION["id"])) {  header('Location: connexion.php'); }

    foreach ($error as $erreure)
    {
    	echo "<center>";
        echo "• " . $erreure . "<br>";
    	echo "</center>";
    }
?>
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