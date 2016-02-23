Voici les fonctionnalités ajoutées suite au blog "initiale" (avant le livrable tp dev web) :


*inscription utilisateurs : simple formulaire + ajout des champs nom, prénoms dans la table utilisateurs

*moteur de recherche simple : ajout d'un formulaire dans le menu qui redirige vers index.php aprés avoir
executé la requete (SELECT * FROM articles WHERE titre LIKE '%mavar% OR contenu LIKE '%$mavar%' ORDER BY `date` DESC;)

*moteur de recherche avancé : algo un peu plus compliqué où l'on vas cette fois séparé tout les mots
clés pour pouvoir faire blouclé et concaténé les restrictions dans la requete

lien github : https://github.com/NicolasPestelle/blogPhp.git

NB : de nouvelles fonctionnalitées vont trés vite arrivées suite au TP vue en cours
