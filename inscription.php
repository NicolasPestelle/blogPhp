<?php
	include('includes/connexion.inc.php');
	include('includes/header.inc.php');
	include('includes/verif_util.inc.php');
	
	//formulaire de l'inscription
	echo '<form action="inscription.php" method="post">
			<div class="clearfix">
				<label for="prenom">prénom</label>
				<input type="text" name="prenom" id="prenom">
			</div>
			<div class="clearfix">
				<label for="nom">nom</label>
				<input type="text" name="nom" id="nom">
			</div>
			<div class="clearfix">
				<label for="email">E-Mail</label>
				<input type="email" name="email" id="email">
			</div>
			<div class="clearfix">
				<label for="password">Mot de passe</label>
				<input type="password" id="password" name="mdp">
			</div>
			<input class="btn btn-primary" id="inscription" type="submit" value="Inscription">
		</form>';

	//traitement des informations (rajout dans la bdd)
	if(isset($_POST['email']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mdp']) ){
			$prenom = mysql_escape_string($_POST['prenom']);
			$nom = mysql_escape_string($_POST['nom']);
			$email = mysql_real_escape_string($_POST['email']);
			$mdp = mysql_real_escape_string(md5($_POST['mdp']));
			
			mysql_query("INSERT INTO utilisateurs (email, mdp, nom, prenom) VALUES ('$email', '$mdp', '$nom','$prenom');");
	
	}else{
		echo '<div class="alert alert-warning">
						<strong>tout les champs doivent être remplis</strong>
					</div>';
	}
	include('includes/footer.inc.php');
?>