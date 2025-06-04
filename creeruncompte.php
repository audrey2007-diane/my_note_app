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
            <?php
            $bddPDO = new PDO('mysql:host=localhost;dbname=mon_site' , 'root', '');
            $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            if(isset($_POST["envoyer"])){
                $username = $_POST["username"];
                $password = $_POST["password"];
                $annivaire = $_POST["anniversaire"];
                $sexe = $_POST["sexe"];
                if(!empty($username) && !empty($password) && !empty($annivaire) && !empty($sexe)){
                    $requete=$bddPDO->prepare("INSERT INTO users (username, password, anniversaire, sexe) VALUES (:username, :password, :anniversaire, :sexe)");
                    $requete->bindvalue(':username', $username);
                    $requete->bindvalue(':password', $password);
                    $requete->bindvalue(':anniversaire', $annivaire);
                    $requete->bindvalue(':sexe', $sexe);
                    $result = $requete->execute();
                    if(!$result){
                        echo "Erreur lors de l'ajout de l'utilisateur !";
                    }else{
                        echo "
                        <script type='text/javascript'>
                            alert('Utilisateur ajouté avec succès !')
                        </script>";
                           
                    header("Location: question.php");
                }
                    
                }else {
                    echo "Veuillez remplir tous les champs !";
                   
                }
                
            }
            ?>
            
            <form action="" method="post" class="formulaire">
                <p>Nouvel utilisateur </p>
                <div class="bouton">
                    <img src="image/SVGRepo_iconCarrier.png">
                    <input type="text" name="username" placeholder="username" required>
                </div>
                <div class="bouton">  
                    <select name="sexe">
                        <option value="femme"> femme</option>
                        <option value="homme">homme</option>
                        <option value="non déclaré">non déclaré</option>
                        <option value="autre">autre</option>
                      
                    </select> 
                </div>       
                <div class ="bouton">
                    <input  type="date" name="anniversaire" placeholder="Veuillez entrer date de naissance"style="width:103px;" required>
                </div>
                <div class="bouton"> 
                    <img src="image/Vector.png">   
                    <input type="password" name="password" placeholder="password" required>
                </div>
                <div class="bouton">   
                    <input type="submit"name="envoyer" value="OK✅" style="transform: translate(50%,70%);">
                </div><br>       
            </form>
        </div>    
       </main>
       <div class="retour">
        <a href="Bienvenue.php"class="back" onclick="corbeille"><div class = aller >Retour </div> </a> 
      </div> 


      
</body>
</html>