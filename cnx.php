 <?php
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "web_mp";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user WHERE email= '" . $email . "' AND mdp='" . $mdp . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                session_start();
                $_SESSION["id"] = $row["id"];
                $_SESSION["nom"] = $row["nom"];
                $_SESSION["email"] = $email;
                $_SESSION["grade"] = "user";

                header("location:index.php");
            }
        } else {
            echo "<script>alert('compte inconnue')</script>";
        }
    }

    ?>