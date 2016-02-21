<?php
	include('includes/connexion.inc.php');
	include('includes/verif_util.inc.php');
	if($connect == true){	
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$delId = mysql_query("DELETE FROM articles WHERE id = $id;");
			mysql_query($delId);
			
			$verif = mysql_query("SELECT * FROM articles WHERE id = $id;");
			if(mysql_query($verif)==false){
				header("Location:index.php");
			}
		}
	}else{
		header("Location:index.php");
	}
?>