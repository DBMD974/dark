<?php
require_once 'connexion.php'; // Assurez-vous que le chemin vers votre fichier MaConnexion.php est correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $accept = isset($_POST["accept"]) ? $_POST["accept"] : false;

    if (!$accept) {
        echo "Vous devez accepter de recevoir des newsletters pour vous abonner.";
    } else {
        $uneconnexion = new MaConnexion("dark_stage", "", "root", "localhost");
        $result = $uneconnexion->insertion_abonner_secure($email);

        $response = json_decode($result, true);

        if (isset($response["message"])) {
            // Rediriger vers l'en-tête (header) après inscription réussie et acceptation
            header("Location: dark.php"); // Remplacez "index.php" par le chemin de votre page
            exit; // Important pour arrêter le script après la redirection
        } else if (isset($response["error"])) {
            echo "Une erreur est survenue : " . $response["error"];
        }
    }
}
?>