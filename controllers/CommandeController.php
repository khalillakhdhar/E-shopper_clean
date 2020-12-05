<?php
session_start();
include("../models/crud_commande.php");
$cm = new Commande();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $cm->addcommande($_SESSION["id"], $id, 1);
}
header("location:index.php");