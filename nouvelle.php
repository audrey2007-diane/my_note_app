
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
    <?php
            $bddPDO = new PDO('mysql:host=localhost;dbname=mon_site' , 'root', '');
            $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            if(isset($_POST["envoyer"])){
                $titre = $_POST["titre"];
                $contenu= $_POST["contenu"];
                
                if(!empty($titre) && !empty($contenu)  ){
                    $requete=$bddPDO->prepare("INSERT INTO notes (titre, contenu) VALUES (:titre, :contenu)");
                    $requete->bindvalue(':titre', $titre);
                    $requete->bindvalue(':contenu', $contenu);
                    $result = $requete->execute();
                    if(!$result){
                        echo "Erreur lors de l'enregistrement!";
                    }else{
                        echo "
                        <script type='text/javascript'>
                            alert('Enregistrement avec succès !')
                        </script>";
                           
                         header("Location: voir.php");
                         exist();
                         header("Location: note.php");
                }
                    
                }else {
                    echo "Echec d'enregistrement !";
                   
                }
                
            }
            ?>

   <form  method="POST" action="" enctype="multipart/form-data"> 
    <div class="for">
      <label for="titre">Titre</label>
      <input type="text" id="titre" name="titre" class="no">

      <label for="notes">Notes</label>
      <textarea rows="10" id="notes" name="contenu"></textarea>

      <div class="boutons">
        <input type="file" name=fichier style="transform: translate(20%, 100%);" >
      
      </div>
    </div>
  </div>
  <div class="retour">
    <a href="note.php"class="back" onclick="corbeille"><div class = aller >Retour </div> </a>
</div> 
<div class="bouton">   
   <input type="submit"name="envoyer" value="OK✅" style="transform: translate(900%,1150%);">
</div><br> 
</form> 
</body>
</html>