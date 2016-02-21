<?php
/*modif en temps réelle de l'image:
de l'image en vignette :
/data/images/123.jpq => /vignettes.jpg.php?id=123
pourquoi .jpg.php ? convention (aucune utilité) c'est de l'indication

dans la rép au nav header("Content-type: image /jpg");
//vignettes.jpg.php?id= 
// chemin img
//calculer ratio et taille image (on fixe la largeur (ex : 200) car on scroll en verticale !!) -> LARGEUR/HAUTEUR = RATIO -> LARGEUR/ RATIO -> HAUTEUR/RATIO
//ouvrir img src
//creer img dest
//redimensionne
//rendre image dest


func : imagecopyresampled
imagecreatefromjpeg
getimagesize
imagecreatetruecolor
imagejpeg*/
include('includes/connexion.inc.php');
header("Content-type: image/jpg");

//Calcul ratio et taille voulue.
$id = $_GET['id'];
$cheminImg = "data/images/$id.jpg";
list($orgLarg, $orgHaut) = getimagesize($cheminImg);

$largVoulue = 200;
$ratio = $orgLarg/$largVoulue;

$realLarg = (int) $orgLarg/$ratio;
$realHaut = (int) $orgHaut/$ratio;


//Création image
$imgCreat = imagecreatetruecolor($realLarg, $realHaut);
$myImg = imagecreatefromjpeg($cheminImg);
imagecopyresampled($imgCreat, $myImg, 0, 0, 0, 0, $realLarg, $realHaut, $orgLarg, $orgHaut);


//Affichage
imagejpeg($imgCreat, null, 100);

?>