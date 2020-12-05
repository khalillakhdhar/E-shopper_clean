<?php include("./models/crud_produit.php");
$pr = new Produit();

$liste = $pr->list_produits();
?>
<div class="col-sm-9 padding-right">
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Articles récents</h2>
        <?php
        while ($row = $liste->fetch_assoc()) {
            if (!isset($_GET['cat']) || ($row["categorie"] == $_GET['cat'])) {
        ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="<?= $row["photo"] ?>" alt="" />
                        <h2><?= $row["prix"] ?></h2>
                        <p><?= $row["description"] ?></p>
                        <a a href="/controllers/CommandeController.php?id=<?= $row["id"] ?>"
                            class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au
                            panier</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2><?= $row["prix"] ?></h2>
                            <p><?= $row["description"] ?></p>
                            <a href="/controllers/CommandeController.php?id=<?= $row["id"] ?>"
                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter
                                au panier</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php }
        } ?>


    </div>
    <!--features_items-->



</div>