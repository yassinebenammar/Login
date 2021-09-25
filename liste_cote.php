<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/liste_cote.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

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
        
        <form action="conn.php" method="POST">
            <p>Username</p>
            <input type="text" placeholder="username" name="username">
            <p>Password</p>
            <input type="password" placeholder="password" name="password"><br><br>
            <button type="submit" value="Envoyer">Send</button>
        </form>
    </div>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/liste_cote.js"></script>
</body>
</html>