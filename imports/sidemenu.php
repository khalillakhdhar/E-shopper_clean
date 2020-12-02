     <?php
        include('./models/crud_categorie.php');
        $ca = new Categorie();
        $liste = $ca->list_categories();
        ?>
     <div class="col-sm-3">
         <div class="left-sidebar">
             <h2>Categories</h2>
             <div class="panel-group category-products" id="accordian">
                 <!--category-productsr-->
                 <div class="panel-heading">
                     <h4 class="panel-title"><a href="index.php">toute les catégories</a>
                     </h4>
                 </div>
                 <?php
                    while ($row = $liste->fetch_assoc()) {
                    ?>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4 class="panel-title"><a href="index.php?cat=<?= $row["titre"] ?>"><?= $row["titre"] ?></a>
                         </h4>
                     </div>
                 </div>
                 <?php } ?>
             </div>
             <!--/category-products-->



         </div>
     </div>