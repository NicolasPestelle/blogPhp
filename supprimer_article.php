<?php
	include('includes/connexion.inc.php');
	include('includes/verif_util.inc.php');
	if($connect == true){	
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$db->exec("DELETE FROM articles WHERE id = $id;");

		}
	}else{
		header("Location:index.php");
	}*/
?>