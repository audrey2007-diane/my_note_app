<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bienvenue.css">
</head>
<body>
    <header>
        <div class=logo><img src="image/logoAD 1.png" style="height:100px; width:100px;"></div>
        <div class="barre"> </div> 
    </header>
    
    <main>
        <div class="bienvenue"></div>
        <div class="carre">
            <div class="message">
                </p> Bienvenue sur<br><u> AD.Solution</u><br> <br>
                la solution <br> pour tous </p>
            </div>
        </div>
        <div class="login">
            <div class="connexion"></div>
            ?>
            
            <form class="formulaire" action="Bienvenue.php" method="post">
                <p>Mot de passe oublié  </p>
                <div class="bouton">
                    <img src="image/SVGRepo_iconCarrier.png">
                    <input type="text" name="username" placeholder="username" required>
                </div>
                   
                <div class ="bouton">
                    <input  type="date" name="age" placeholder="Veuillez entrer date de naissance"style="width:103px;" required>
                </div>
                <div class="bouton"> 
                    <img src="image/Vector.png">   
                    <input type="password" name="new_password" placeholder="new password" required>
                </div>
                <div class="bouton"> 
                    <img src="image/Vector.png">   
                    <input type="password" name="confirm_password" placeholder="confirm password" required>
                </div>
                <div class="bouton">   
                    <input type="submit" value="OK✅" style="transform: translate(50%,70%);">
                </div><br>     
            </form>
        </div>    
       </main>
       <div class="retour">
        <a href="Bienvenue.php"class="back" onclick="corbeille"><div class = aller >Retour </div> </a> 
      </div> 
</body>
</html>