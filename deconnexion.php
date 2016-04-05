<?php
	setcookie("connexion","$sid",-3600); //on "détrui" le cookie
	header('Location: index.php');
?>