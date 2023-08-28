<?php
require_once 'connexion.php'; // Assurez-vous que le chemin vers votre fichier MaConnexion.php est correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $uneconnexion = new MaConnexion("dark_stage", "", "root", "localhost");
    $result = $uneconnexion->insertion_abonner_secure($email);

    $response = json_decode($result, true);

    if (isset($response["message"])) {
        // Rediriger l'utilisateur vers une page de succès
        header("Location: dark.php");
        exit(); // Assurez-vous de terminer le script ici pour éviter toute exécution supplémentaire
    } else if (isset($response["error"])) {
        echo "Une erreur est survenue : " . $response["error"];
    }
}
?>
