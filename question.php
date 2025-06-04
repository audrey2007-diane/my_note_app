<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bienvenue.css">
</head>
<body>
<?php
if (isset($_POST['ok'])) {
    header("Location: note.php");
    exit;
}
?>
    <header>
        <div class=logo><img src="image/logoAD 1.png" style="height:100px; width:100px;"></div>
        <div class="barre"> </div> 
    </header>

    <main>
        <div class="bienvenue"></div>
        <form method="post">
            <div class="question">
                <p> Comment avez vous connu <u>AD.Solution </u>?</p>
                <input type="checkbox" name="reponse[]" value="a">Réseau sociaux ( Facebook , Tiktok , Instagram...)<br><br>
                <input type="checkbox" name="reponse[]" value="b">Par un(e) ami(e)<br><br>
                <input type="checkbox" name="reponse[]" value="c"> Publicité en ligne <br><br>
                <input type="checkbox" name="reponse[]" value="d"> Recherche internet<br><br>
                <input type="checkbox" name="reponse[]" value="e"> Par un influenceur / Créateur de contenu<br><br>
                <input type="checkbox" name="reponse[]" value="f"> Recommandation d'un profesionnel <br><br>
                <input type="checkbox" name="reponse[]" value="g"> Bouche à oreille<br><br>
                <input type="checkbox" name="reponse[]" value="h"> via mail ou newsletter<br><br>
                <input type="checkbox" name="reponse[]" value="i"> autres <br><br>
                <div class="bouton">   
                    <input type="submit" name="ok" value="OK✅" style="transform: translate(400%,-150%);">
                </div><br> 
                <div class="bouton">
                    <input type="reset" value="No❌" style="transform: translate(-140%,-320%); position: fixed;">
                </div>
            </div>
        </form>
    </main>
</body>
</html>