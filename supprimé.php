<?php
try {
    $bddPDO = new PDO('mysql:host=localhost;dbname=mon_site', 'root', '');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['supprimer']) && !empty($_POST['notes'])) {
    $notes = $_POST['notes']; // Tableau des IDs des notes sélectionnées

    // Préparation de la requête pour déplacer les notes dans la corbeille
    $placeholders = implode(',', array_fill(0, count($notes), '?'));
    $requete = $bddPDO->prepare("UPDATE notes SET corbeille = 1 WHERE id_notes IN ($placeholders)");

    if ($requete->execute($notes)) {
        echo "<script>alert('Notes déplacées dans la corbeille avec succès !');</script>";
        header("Location: voir.php");
        exit;
    } else {
        echo "Erreur lors du déplacement des notes dans la corbeille.";
    }
} else {
    echo "Aucune note sélectionnée.";
}
?>