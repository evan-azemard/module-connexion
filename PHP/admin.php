<?php
session_start();  
if ($_SESSION["prenom"] == "admin"){


}
else{
   header('Location: connexion.php?');
}
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
					<li>	<?php
					if (!isset($_SESSION["id"])){
						echo '<a href="inscription.php">';
						echo 'Inscription';
						echo '</a>';
					}
					else{
						echo '';
					}
					?></li>
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
						?></li>
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
<main id="main_admin">
	<div id="centre_main">
	</div>
	<table border="5px">
		<thead>
			<tr>
				<th>id</th>
				<th>login</th>
				<th>prenom</th>
				<th>nom</th>
				<th>password</th>
			</tr>
		</thead>
			 <?php
  			   	    $bdd = new mysqli("localhost", "root", "", "moduleconnexion");
					$sql = " SELECT id, login , prenom , nom , password FROM utilisateurs";

 					if (isset($_SESSION["username"])){

						$result = mysqli_query ($bdd,$sql);

				

  						while ($rows = mysqli_fetch_assoc($result)){
						echo '<tbody>';
							 echo '<tr>';
								echo '<td><center>';
								echo $rows['id'];
								echo '</center></td>';
								echo '<td><center>';
								echo $rows['login'];
								echo '</center></td>';
								echo '<td><center>';
								echo $rows['prenom'];
								echo '</center></td>';
								echo '<td><center>';
								echo $rows['nom'];
								echo '</center></td>';
								echo '<td> <center>';
								echo $rows['password'];
								echo '</center></td>';
							echo '</tr>';
						echo '</tbody>';
		                } 
		            }
             	 ?>

             	 	
	
	</table>
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