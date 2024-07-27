<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=inscription", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
    $bdd->exec("CREATE DATABASE IF NOT EXISTS inscription");
    $bdd = new PDO("mysql:host=$servername;dbname=inscription", $username, $password);
    echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // extract($_POST);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $req = $bdd->prepare('INSERT INTO users VALUES (0,:nom, :prenom, :pseudo, :pass, :email)');
    $req->execute(
        array(
            'nom' => $nom,
            'prenom' => $prenom,
            'pseudo' => $pseudo,
            'pass' => $pass,
            'email' => $email
        )
    );
    $reponse = $req->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}
