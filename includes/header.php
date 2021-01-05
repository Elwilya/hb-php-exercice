<?php
    // On peut inclure les fichiers php que l'on souhaite où l'on veut,
    // s'ils n'affichent rien directement (sinon, il faut les inclure là où l'on souhaite afficher leur contenu ;) )
    // L'important est que leur contenu soit inclu avant qu'on en ait besoin dans ce fichier (par exemple, on doit avoir inclu la variable $mesProduits avant de nous en servir dans cette page)
    // Par habitude, on importe d'abord les variables (qui pourraient être utilisées par les fonctions), puis les fonctions.
    require_once('vars.php');
    require_once('functions.php');
?>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
    <body>