<?php include 'includes/header.php'; ?>
<div class="row">
<?php
    // 
    // foreach($mesProduits as $key => $produit) {
    //     if ($key <= 2) {
    //         // var_dump($produit);
    //     }
    // }

    // for ($i = 0; $i <= 2; $i++) {
    //     // var_dump($mesProduits[$i]);
    // }

    // $produits = array_slice($mesProduits, 0, 3);
    // foreach($produits as $produit) {
    //     // ...
    // }

    // $produits = array_chunk($mesProduits, 3);
    // $produits = $produits[0];
    // foreach($produits as $produit) {
    //     // ...
    // }

    $produits = array_slice($mesProduits, 0, 3);
    foreach($produits as $produit) {
?>
    <div class="card col-md-4 col-sm-12">
        <img src="images/<?php echo $produit['image'] ?>" class="card-img-top" style="max-width: 10rem;">
        <div class="card-body">
            <h2 class="card-title"><?php echo $produit['name'] ?></h2>
            <p class="card-text"><?php echo $produit['description'] ?></p>
        </div>
    </div>
<?php
    }
?>
</div>

<?php include 'includes/footer.php'; ?>