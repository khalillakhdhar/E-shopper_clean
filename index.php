<!--/head-->
<?php
include('./imports/imports.php');
//
//include('./models/crud_produit.php');

?>
<?php
//$pr = new Produit();

//$liste = $pr->list_produits();
?>

<body>
    <?php
    include('./imports/header.php');

    ?>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Magasin traditionelle en ligne</h2>
                                    <p>Trouvez vos produits antique et traditionnelle </p>
                                    <button type="button" class="btn btn-default get">Découvrer nos prix</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Tunisien</h2>
                                    <p>Consommez Tunisie </p>
                                    <button type="button" class="btn btn-default get">découvrez notre boutique en
                                        ligne</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>


                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <?php
                include('./imports/sidemenu.php')

                ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->



                    </div>
                    <!--features_items-->

                    <?php
                    include("affiche.php");
                    ?>

                </div>
            </div>
        </div>
    </section>

    <?php
    include('./imports/footer.php')

    ?>
    <!--/Footer-->




</body>

</html>