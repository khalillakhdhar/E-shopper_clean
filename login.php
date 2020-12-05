<?php
session_start();
session_destroy();
include('./imports/imports.php')

?>
<?php

include("./config/connect.php");


if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    try {
        $sql = "INSERT INTO `user`( `email`, `mdp`, `nom`, `telephone`, `adresse`, `grade`) VALUES ('" . $email . "','" . $mdp . "', '" . $nom . "', '" . $telephone . "', '" . $adresse . "','user')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        header("location:login.php");
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

?>

<body>
    <?php
    include('./imports/header.php')

    ?>
    <!--/header-->

    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2>Connexion</h2>
                        <form action="cnx.php" method="POST">
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" placeholder="Mot de passe" name="mdp" />

                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div>
                    <!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                        <!--sign up form-->
                        <h2>Nouveau compte!</h2>
                        <form action="login.php" method="POST">
                            <input type="text" name="nom" placeholder="nom complet" />
                            <input type="text" name="telephone" placeholder="telephone" />
                            <textarea name="adresse" placeholder="adresse"></textarea>
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" placeholder="Mot de passe" name="mdp" />
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->


    <?php
    include('./imports/footer.php')

    ?>
    <!--/Footer-->




</body>

</html>