<?php
$pdo = "null";
$user = "root";
$password = "";
$host = "localhost";
$bdname = "test";

try {
    $connexion= new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "connection etablir";
        $name=$_POST["username"];//receiving name field value in $name variable  
        $password=$_POST["password"];
        
        if (isset($_POST['username'], $_POST['password'])) {
            if ($_POST['password'] != "" && $_POST['username'] != "") {
                
                $nom = $_POST['username'];
                $pass = $_POST['password'];
            
                $sql = 'INSERT INTO Login(Username,Password) VALUES(:name , :pass)';

                $statement = $connexion->prepare($sql);

	            $statement->execute([
		            ':name' => $nom , ':pass' => $pass
	            ]);
                ?>
                <div id="resultat" style="color=green;">
                    <?php
                        echo "Information enregistrer avec succès";
                    ?>
                </div>
                
<?php   
            }else {
                echo "L'enregistrement n'apas etre effectué";
            }
        }
        
} catch (PDOExeption $e) {
    echo "Erreur connexion" + $e->getMessage() ;
    exit();

}


?>