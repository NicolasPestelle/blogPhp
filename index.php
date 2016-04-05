<?php
include('includes/connexion.inc.php');
include('includes/header.inc.php');
include('includes/verif_util.inc.php');
//include('vignette.jpg.php');
?>

	<div id="banner">

	
	 <!-- maintenant faire avec les articles au lieu des images !!-->
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="/data/images/0.jpg"></li>
          <li><img src="/data/images/57.jpg" title="Automatically generated caption"></li>
          <li><img src="/data/images/58.jpg" title="Automatically generated caption"></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
<script>
	  
	  	jQuery(document).ready(function($) {

          $('#banner').bjqs({
            height      : 200,
            width       : 400,
            responsive  : true
          });
        });
		
		</script>
<?php
//on check si le bouton est cliqué

if(!isset($_POST['search'])){
		$res = mysql_query('SELECT * FROM articles ORDER BY `date` DESC;');
}else{

		$recherche = mysql_real_escape_string(htmlspecialchars($_POST['search']));
		
		//séparation des mots clés
		$rech = explode(' ',$recherche);
		$size = sizeof($rech);
		
		$req = "SELECT * FROM articles WHERE ";
		
		//traitement de tout les éléments
		for($i = 0; $i <= $size-1; $i++){
			
			//Si size-1 = fin de requete
			if($i == $size-1){
				//concaténation dans la var
				$req .= "titre LIKE '%$rech[$i]%' OR contenu LIKE '%$rech[$i]%' ORDER BY `date` DESC;";
			}else{
				//concaténation reste de la requete
				$req .= "titre LIKE '%$rech[$i]%' OR contenu LIKE '%$rech[$i]%' OR ";
			}
		}
		
		$res = mysql_query("$req");
	}
	
	/*On se sert du $res que l'on a défini précédemment.
	Si on a des résultat, affiche nos articles
	Si 0 ligne retourné alors on met l'alerte
	*/
	if(mysql_num_rows($res) > 0){
		while($data = mysql_fetch_array($res)){
			$id = $data['id'];
			$cheminDest = "data/images/$id.jpg";
			echo '<h3>'.utf8_encode($data['titre']).'</h3>';
			echo '<h5> Posté le '.$data['date'].'</h5>';
				
			//Affiche l'image
			if(file_exists($cheminDest)){
				echo "<img src='vignette.jpg.php?id=$id'>";
			}
				
			echo '<p>'.nl2br(htmlspecialchars($data['contenu'])).'</p>';
			
			if($connect == true){
				echo "<a class='btn btn-primary' href='article.php?id=$id'>Modifier</a> ";
				echo "<a class='btn btn-danger' href='supprimer_article.php?id=$id'>Supprimer</a>";
			}
			
			echo '<hr/>';
		}
	}else{
		echo '<div class="alert alert-warning">
				<strong>Aucun des articles ne correspond à votre recherche.</strong>
				</div>';
	}

include('includes/footer.inc.php');
?>