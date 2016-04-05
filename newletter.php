<?php
include('includes/connexion.inc.php');
/*
principe : factoriser le code pour pouvoir gérer les différentes erreurs. ici on regarde les 3 cas possibles (OK, deja abonne, KO)
dans les 3 cas on vas récupérer le message, et l'afficher dans les différents alertes (2 cas sur 3 ca seras un alert-danger)
*/
$data = "veuillez rentrer une email valide";
$x=false;
if(filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){

	$email = mysql_real_escape_string($_GET['email']);
	$retour = array('OK','déjà abonné','KO');
	$req = mysql_query("SELECT email FROM newsletter WHERE email='$email';");
	if(mysql_num_rows($req)> 0){
		$data = $retour[1];
	}elseif(mysql_num_rows($req) == 0){
		$data = $retour[0];
		$x = true;
		mysql_query("INSERT INTO newsletter (email) VALUES ('$email');");
	}else{
		$data = $retour[2];
	}

}
	
	if($x == false){
				   echo "<div class='alert alert-danger'>
					<button onclick='removeParent()' type='button' class='close' data-dismiss='alert'>&times;</button>
						$data
					</div>";
	
}else{
	echo "<div class='alert alert-success'>
					<button onclick='removeParent()' type='button' class='close' data-dismiss='alert'>&times;</button>
						$data
					</div>";
}


