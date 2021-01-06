<<<<<<< Updated upstream
<?php
    // On peut inclure les fichiers php que l'on souhaite où l'on veut,
    // s'ils n'affiche rien directement (sinon, il faut les inclure là où l'on souhaite afficher leur contenu ;) )
    // L'important est que leur contenu soit inclu avant qu'on en ait besoin dans ce fichier (par exemple, on doit avoir inclu la variable $mesProduits avant de nous en servir dans cette page)
    // Par habitude, on importe d'abord les variables (qui pourraient être utilisées par les fonctions), puis les fonctions.
    include 'vars.php';
    include 'functions.php';
?>
<html lang="fr">
    <body>
        <!-- La balise table défini le cadre du table, tr une ligne et th des cellules de titre (affiché en gras et avec du texte centré par défaut) -->
        <table>
            <tr>
                <th>
                    Nom du produit
                </th>
                <th>
                    Prix HT
                </th>
                <th>
                    Prix TTC
                </th>
                <th>
                    Description
                </th>
            </tr>
            <!-- n'importe où dans notre html, on peut faire appel à php pour ajouter du texte, faire des calculs, etc. -->
            <?php
                // pour appeler les différentes lignes de notre tableau, on parcourt le tableau $mesProduits, 
                // défini dans le fichier vars.php (disponible dans ce fichier grâce à l'import en début de fichier)
                foreach($mesProduits as $produit) {
                    // On appelle la fonction afficheProduit, en passant en paramètre le produit en cours
                    afficheProduit($produit);
                }
            ?>
        </table>
    </body>
</html>
=======
<?php include 'includes/header.php'; ?>
<div class="row">
<?php
    // Nous avons ici 4 méthodes possibles (il y en a sûrement d'autres)
    // pour récupérer les 3 premiers éléments de notre tableau.

    // Cette méthode (tout comme la suivante), se base sur le fait que les index
    // de notre tableau $mesProduits sont générés automatiquement et seront forcément
    // de 0 à 4 (ou plus si l'on ajoute de nouvelles entrées

    // On récupère ici l'index de chaque entrée du tableau et on vérifie
    // que le troisième n'est pas atteint
    // foreach($mesProduits as $key => $produit) {
    //     if ($key <= 2) {
    //         // var_dump($produit);
    //     } else {
    //         break; // j'ajoute ce break pour indiquer à foreach de s'arrêter si la clé est > 2
    //         // Nous n'avons alors plus besoin de continuer à parcourir le tableau et lui demandons de s'arrêter
    //     }
    // }

    // Ici, on parcourt simplement le tableau et ses index 0, 1 et 2
    // for ($i = 0; $i <= 2; $i++) {
    //     // var_dump($mesProduits[$i]);
    // }

    // On demande à PHP de nous renvoyer un tableau contenant seulement les 3 premiers éléments du tableau
    // Voir : https://www.php.net/manual/fr/function.array-slice.php
    // $produits = array_slice($mesProduits, 0, 3);
    // foreach($produits as $produit) {
    //     // ...
    // }

    // Une méthode plus complexe, mais pouvant servir pour faire une pagination :
    // On utilise la méthode array_chunk() pour créer un tableau contenant des groupes de 3 éléments
    // Voir : https://www.php.net/manual/fr/function.array-chunk.php
    // $produits = array_chunk($mesProduits, 3);
    // $produits = $produits[0];
    // foreach($produits as $produit) {
    //     // ...
    // }

    // array_slice() est la méthode prenant le moins de lignes et la plus sûre (pas besoin de se soucier des index)
    $produits = array_slice($mesProduits, 0, 3);
    foreach($produits as $produit) {
        cardProduit($produit);
    }
?>
</div>

<?php include 'includes/footer.php'; ?>
>>>>>>> Stashed changes
