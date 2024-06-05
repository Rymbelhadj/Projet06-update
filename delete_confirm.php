<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM leçon WHERE id_lecon = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        // Exécutez la requête
        if ($stmt->execute()) { 
            header("Location: leçon.php");
            exit(); 
        } else { 
            echo "Erreur lors de la suppression du leçon."; 
        }
    } catch (PDOException $e) {
        echo "Erreur de base de données : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant du leçon' n'est pas spécifié.";
}
?>