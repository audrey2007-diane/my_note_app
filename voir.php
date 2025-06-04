<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bienvenue.css">
</head>
<body>
    <?php
    $bddPDO = new PDO('mysql:host=localhost;dbname=mon_site' , 'root', '');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT * FROM notes ORDER BY id_notes  ASC ";
    $result=$bddPDO->query($requete);

    if (!$result){
    echo "Erreur lors de la récupération des notes !";
    }else{
        $nbre_clients = $result->rowCount();
    }
    ?>
    <header>
        <div class=logo><img src="image/logoAD 1.png" style="height:100px; width:100px;"></div>
        <div class="barre"> </div> 
       </header>
    <form  method="POST" action="" enctype="multipart/form-data">
       <main>
        <div class="bienvenue">
            <div class="audrey" style= " left: 60%;">
                <table border="4">
                    <tr><br>
                        <th>Titre      </th><br><br><br><br>
                        <th>Contenu         </th><br>
                        <th>Date de création         </th>
                    </tr>
                    <?php
                    while($ligne= $result->fetch(PDO::FETCH_NUM)){
                        echo "<tr>";

                        echo "<td>".htmlspecialchars ($ligne[1]).  "</td>";
                        echo "<td>".htmlspecialchars  ($ligne[2])."</td>";
                        echo "<td>".htmlspecialchars ($ligne[3])."</td>";
                        echo "</tr>";
                    }
                    ?>
                </table></div>
         </div>
        
        <div class="mesnotes">
            <h4> Mes notes </h4>
        </div>
       
        <div class="retour">
            <a href="note.php"class="back" onclick="corbeille"><div class = aller >Retour </div>  </a>
        </div> 

     </form>    
</body>
</html>