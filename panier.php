<!--/head-->
<?php
session_start();
if (!isset($_SESSION['id'])) {

    header("location:login.php");
}
include('./imports/imports.php');
//
include('./models/crud_commande.php');

?>
<?php
$cm = new Commande();

$liste = $cm->list_mescommandes();
?>

<body>
    <?php
    include('./imports/header.php');

    ?>
    <!--/header-->

    <section id="cart_items">
        <div class="container">


            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">photo</td>
                            <td class="description">titre/date</td>
                            <td class="price">prix</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $liste->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="<?= $row["photo"] ?>" width="200" height="300"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?= $row["titre"] ?></a></h4>
                                <p><?= $row["description"] ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?= $row["prix"] ?></p>
                            </td>


                            <td class="cart_delete">
                                <a class="cart_quantity_delete"
                                    href="./controllers/CommandeController.php?id=<?= $row["id"] ?>"><i
                                        class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <div class="payment-options">
                <span>
                    <label><input type="checkbox"> Direct Bank Transfer</label>
                </span>
                <span>
                    <label><input type="checkbox"> Check Payment</label>
                </span>
                <span>
                    <label><input type="checkbox"> Paypal</label>
                </span>
            </div>
        </div>
    </section>
    <!--/#cart_items-->



    <?php
    include('./imports/footer.php')

    ?>
    <!--/Footer-->




</body>

</html>