<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/liste_cote.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<?php
    require('conn.php');
    if (isset($_POST["submit"])) {
        if (isset($_POST['Username'], $_POST['Password'])) {
            if ($_POST['Password'] != "" && $_POST['Username'] != "") {
                $insertion = "INSERT INTO Login (Username,Password) VALUES($nom, $pass )";
                
                $nom = $_POST['Username'];
                $pass = $_POST['Password'];
    
                $execute = $pdo->query($insertion);
                if ($execute == true) {
                    $msgSucce = "Information enregistrer avec succès";
                }else{
                    $msgrefuse = "L'enregistrement n'apas etre effectué";
                }
            }
        }
    }

?>

<body>
    <!--nav class="menu">
        <span class="close-btn"> X</span>
        <ul id="father">
            <h1>MAIN MENU</h1>
            <li>Item 01</li>
            <li>Item 02
                <ul id="son">
                    <li>Item 01</li>
                    <li>Item 02</li>
                    <li>Item 03</li>
                </ul>
            </li>
            <li>Item 03</li>
            <li>Item 04</li>
            <li>Item 05</li>
        </ul>
        
    </nav-->

    <div class="content">
        <h1>VERTICAL SIDE MENU</h1>
    </div>
    <h1>Login</h1>
    <div class="formulaire">
        <div>
            <?php
                if (isset($msgrefuse)) {
                    echo $msgrefuse;
                } elseif (isset($msgSucce)) {
                    echo $msgSucce;
                }
                

            ?>
        </div>
        <form action="conn.php" method="post">
            <p>Username</p>
            <input type="text" placeholder="Username">
            <p>Password</p>
            <input type="password" placeholder="Password"><br><br>
            <input type="submit" id="submit" value="Envoyer">
        </form>
    </div>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/liste_cote.js"></script>
</body>
</html>