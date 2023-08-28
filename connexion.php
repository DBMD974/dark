<?php

use MaConnexion as GlobalMaConnexion;

class MaConnexion
{
    // Les propriétés suivantes sont utilisées pour stocker les informations de connexion à la base de données.
    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connexionPDO;

    // Le constructeur de la classe prend en paramètre les informations de connexion à la base de données et établit une connexion PDO.
    public function __construct($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote)
    {
        // Les paramètres sont affectés aux propriétés de la classe.
        $this->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->hote = $hote;

        try {
            // La chaîne de connexion DSN (Data Source Name) est construite en utilisant les paramètres fournis.
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            // Une nouvelle instance de la classe PDO est créée pour établir la connexion à la base de données.
            $this->connexionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDePasse);
            // L'attribut ERRMODE de PDO est configuré pour générer une exception en cas d'erreur de requête.
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Si la connexion réussit, la phrase "Connexion réussie" est affichée. (Commentée)
        } catch (PDOException $e) {
            // En cas d'erreur lors de la connexion, le message d'erreur est affiché.
            echo "Erreur : " . $e->getMessage();
        }
    }





    // Cette méthode permet d'insérer un nouvel utilisateur dans la table "compte".
    public function insertion_abonner_secure($email,)
    {
        try {
            // La requête SQL d'insertion est préparée en utilisant des paramètres pour éviter les injections SQL.
            $requete = "INSERT INTO utilisateur (email) VALUES (:email)";
            // La requête préparée est créée en utilisant la connexion PDO établie dans le constructeur.
            $requete_preparee = $this->connexionPDO->prepare($requete);

            // Les valeurs des paramètres :email et :mdp sont liées aux variables $email et $mdp respectivement.
            // Les types de données des paramètres sont également spécifiés (chaîne de caractères dans ce cas).

            $requete_preparee->bindParam(":email", $email, PDO::PARAM_STR);



            $requete_preparee->execute();

            $json_reponse = array(
                "message" => "insertion reussie"

            );

            return json_encode($json_reponse);
        } catch (PDOException $e) {
            $error = array(
                "error" => "Erreur :" . $e->getMessage()
            );
            return json_encode($error);
        }
    }




    //fonction pour selectionner des elements dans la bdd
    // public function select_glycemie()
    // {
    //     try {
    //         $requete = "SELECT * from glycemie";
    //         $requete_preparee = $this->connexionPDO->prepare($requete);
    //         $resultat = $requete_preparee->execute();
    //         $resultat = $requete_preparee->fetchAll(PDO::FETCH_ASSOC);

    //         return $resultat;
    //     } catch (PDOException $error) {
    //         return "Erreur : " . $error->getMessage();
    //     }
    // }



    //fonction pour selectionner des elements dans la bdd
    // public function selectagents()
    // {
    //     try {
    //         $requete = "SELECT * from agents";
    //         $requete_preparee = $this->connexionPDO->prepare($requete);
    //         $resultat = $requete_preparee->execute();
    //         $resultat = $requete_preparee->fetchAll(PDO::FETCH_ASSOC);

    //         return $resultat;
    //     } catch (PDOException $error) {
    //         return "Erreur : " . $error->getMessage();
    //     }
    // }


// code ci-dessous pour la page inscription
    // public function insertion_utilisateur_secure( $prenom, $nom, $email, $mdp, $date_de_naissance)
    // {
    //     try {
    //         $requete = "INSERT INTO `utilisateur`( prenom,nom, email, mdp, date_de_naissance) VALUES ( ?, ?, ?, ?, ?)";
    //         $requete_preparee = $this->connexionPDO->prepare($requete);

    //         // $requete_preparee->bindValue(1, $id_utilisateurs);
    //         $requete_preparee->bindValue(1, $prenom);
    //         $requete_preparee->bindValue(2, $nom);           
    //         $requete_preparee->bindValue(3, $email);
    //         $requete_preparee->bindValue(4, $mdp);
    //         $requete_preparee->bindValue(5, $date_de_naissance);

    //         $requete_preparee->execute();
    //         return "insertion reussie";
    //     } catch (PDOException $e) {
    //         return $e->getMessage();
    //     }
    // }



    // public function insertion_medecin_secure( $nom, $prenom, $specialite, $email, $mdp, $date_de_naissance)
    // {
    //     try {
    //         $requete = "INSERT INTO `professionnel_sante`( prenom,nom, email, mdp, date_de_naissance) VALUES ( ?, ?, ?, ?, ?)";
    //         $requete_preparee = $this->connexionPDO->prepare($requete);

    //         // $requete_preparee->bindValue(1, $id_utilisateurs);
    //         $requete_preparee->bindValue(1, $prenom);
    //         $requete_preparee->bindValue(2, $nom);           
    //         $requete_preparee->bindValue(3, $email);
    //         $requete_preparee->bindValue(4, $mdp);
    //         $requete_preparee->bindValue(5, $date_de_naissance);

    //         $requete_preparee->execute();
    //         return "insertion reussie";
    //     } catch (PDOException $e) {
    //         return $e->getMessage();
    //     }
    // }


// code ci-dessous pour la page connexion
    //     public function select_where_utilisateur($table, $column, $email) {
    //     try {
    //         $requete = "SELECT $column FROM $table WHERE email = $email";
    //         $resultat = $this->connexionPDO->prepare($requete);
    //         $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); //

    //         return $resultat;
    //     } catch (PDOException $e) {
    //         echo "Erreur : " . $e->getMessage();
    //     }
    // }




    

    // public function select_where_articles($table, $column, $id) {
    //     try {
    //         $requete = "SELECT $column FROM $table WHERE id_articles = $id";
    //         $resultat = $this->connexionPDO->query($requete);
    //         $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); 

    //         return $resultat;
    //     } catch (PDOException $e) {
    //         echo "Erreur : " . $e->getMessage();
    //     }
    // }








}


$uneconnexion = new MaConnexion("dark_stage", "", "root", "localhost");
// $uneconnexion->insertion_utilisateur_secure('nom','prenom','email','mdp');
?>


<!-- Description du code : 

    Le code définit une classe  MaConnexion qui gère la connexion à la base de données
     et contient une méthode  inscription_utilisateur pour insérer un nouvel utilisateur
      dans la table  compte. 


    La classe a quatre propriétés privées ($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote)
     qui sont utilisées pour stocker les informations de connexion à la base de données.


    Le constructeur  __construct prend en paramètre les informations de connexion
    ( $nomBaseDeDonnees,  $motDePasse,  $nomUtilisateur,  $hote) et établit une connexion PDO à la base de données. 


    La méthode  inscription_utilisateur permet d'insérer un nouvel utilisateur dans la table  compte.
     Elle prend en paramètre l'email et le mot de passe de l'utilisateur. 
     La requête SQL d'insertion est préparée pour éviter les injections SQL en utilisant des paramètres avec des marqueurs de position 
     ( :email et  :mdp). Les valeurs des paramètres sont liées aux variables correspondantes 
     ($email et $mdp) pour assurer la sécurité des données insérées.


    En cas d'erreur lors de la connexion à la base de données, 
    l'exception  PDOException est capturée, et un message d'erreur est affiché. 

Ce code montre une base de classe de gestion de connexion à la base de données et d'insertion d'utilisateurs.
 Dans une application réelle, vous pourriez ajouter d'autres 
 fonctionnalités pour effectuer des opérations plus complexes avec la base de données,
  telles que la récupération des données, les mises à jour ou les suppressions. 
  Notez également que dans une application réelle, 
  il est important de ne pas stocker les mots de passe en clair dans la base de données, 
  mais plutôt de les hacher à l'aide de fonctions appropriées telles que password_hash()
   et password_verify(). -->