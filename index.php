<?php
include('includes/connexion.inc.php');
include('includes/header.inc.php');
include('includes/verif_util.inc.php');
//include('vignette.jpg.php');

//traitement search bar 
if(isset($_POST['search'])){
	$search = mysql_real_escape_string($_POST['search']);
	$res  = mysql_query("SELECT * FROM articles WHERE contenu LIKE '%$search%';");

}else{
	
	//traitement articles
	$res = mysql_query("SELECT * FROM articles;");

}
	date_default_timezone_set('UTC');


	//affichage des articles
	while($data = mysql_fetch_array($res)){
		$id = $data['id'];
		$cheminDest = "data/images/$id.jpg";
		echo '<h3>'.utf8_encode($data['titre']).'</h3>';
		echo '<h5> Posté le '.$data['date'].'</h5>';
		if(file_exists($cheminDest)){
			echo "<img src='vignette.jpg.php?id=$id'>";
		}
		echo '<p>'.nl2br(htmlspecialchars($data['contenu'])).'</p>';
		if($connect == true){
			echo "<a class='btn btn-primary' href='article.php?id=$id'>Modifier</a> ";
			echo "<a class='btn btn-danger' href='supprimer_article.php?id=$id'>Supprimer</a>";
		}
	}

include('includes/footer.inc.php');
?>