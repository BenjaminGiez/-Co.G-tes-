<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/main.css" rel="stylesheet">
    <?php
    
        $servname = 'localhost';
        $dbname = 'quizz';
        $user = 'root';
        $pass = '';
    
        try {
            $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur lors de la connection : " . $e->getMessage();
        }
        session_start()
        ?>

    <title>⌂ Accueil ⌂</title>
</head>
<body>

<div class="nav">
            <img src="assets/logo2.png" alt="logo co.gites" id="logo">
            <a href="add.php"> <button type="button" class="btn btn-success btn-lg">Proposer un hébergement</button></a><br>
            <a href="admin_gites.php"> <button type="button" class="btn btn-success btn-lg">Mes hébergements</button></a><br>
        </div>
        <div class="bando">
                <h1>Je recherche un gite</h1>
            <span>
                <h3>Nombre de personnes</h3>
                <input type="number">
                <h3>Dates</h3><br>
                <h4>du</h4><input type="date"><h4>au</h4><input type="date">
            </span>
        </div>






</body>
</html>

<?php

/*
require 'classes/utilisateur.class.php';
new Utilisateur();

//Création bdd ▼ Gîtes ▼
$servername = 'localhost';
$username = 'root';
$password = '';
try{
    $dbco = new PDO("mysql:host=$servname", $username, $password);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS gites";
    $dbco->exec($sql);
    echo '<div class="echo"> Base de données "Gîtes" bien créée =====(ಠ_ಠ)====</div>';
}
catch(PDOException $e){
echo "Erreur lors de la création de la base de données 'Gîtes' : " . $e->getMessage();
}


//Création tables ▼ Utilisateurs ▼
            $servname = 'localhost';
            $dbname = 'gites';
            $user = 'root';
            $pass = '';
try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS Utilisateurs (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(25) NOT NULL,
            userpass VARCHAR(65) NOT NULL,
            mail VARCHAR(50) NOT NULL,
            phone INTEGER(10) NOT NULL,
            UNIQUE(mail))";

    $dbco->exec($sql);
    echo '<div class="echo"> Table "Utilisateurs" bien créée (ノಠ益ಠ)ノ彡┻━┻ </div>'; 
}
catch(PDOException $e){
echo ' Erreur lors de la création de la table "Utilisateurs" ' . $e->getMessage();
}


//Création tables ▼ Prestataires ▼
            $servname = 'localhost';
            $dbname = 'gites';
            $user = 'root';
            $pass = '';
try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS Prestataires (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(25) NOT NULL,
            userpass VARCHAR(65) NOT NULL,
            mail VARCHAR(50) NOT NULL,
            phone INTEGER(10) NOT NULL,
            UNIQUE(mail))";

$dbco->exec($sql);
echo '<div class="echo"> Table "Prestataires" bien créée (ノಠ益ಠ)ノ彡┻━┻ </div>'; 
}
catch(PDOException $e){
echo ' Erreur lors de la création de la table "Prestataires" ' . $e->getMessage();
}


//Création tables ▼ Réservations ▼
            $servname = 'localhost';
            $dbname = 'gites';
            $user = 'root';
            $pass = '';
try{
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE TABLE IF NOT EXISTS Reservations (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                date_arrive int(25) NOT NULL,
                date_depart int(25) NOT NULL)";
// ▲ Ad ids ! ▲
$dbco->exec($sql);
echo '<div class="echo"> Table "Reservations" bien créée ᕕ(ಠ_ಠ)ᕗ🔗 </div>'; 
}
catch(PDOException $e){
echo ' Erreur lors de la création de la table "Reservations " ' . $e->getMessage();
}

//Création tables ▼ Gîtes Réservés ▼
$servname = 'localhost';
$dbname = 'gites';
$user = 'root';
$pass = '';
try{
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE IF NOT EXISTS GitesReserv(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    statut boolean NOT NULL)";
// ▲ Ajouter id résa ! ▲

$dbco->exec($sql);
echo '<div class="echo"> Table "Gîtes Réservés" bien créée 🔐🏡 </div>'; 
}
catch(PDOException $e){
echo ' Erreur lors de la création de la table "Gîtes Réservés " ' . $e->getMessage();
}


//Création tables ▼ Gîtes Occupés ▼
$servname = 'localhost';
$dbname = 'gites';
$user = 'root';
$pass = '';
try{
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE IF NOT EXISTS GitesOccup(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    arrive date NOT NULL,
    depart date NOT NULL,
    statut boolean NOT NULL)";
// ▲ Ajouter id du gîtes et id de la résa ! ▲

$dbco->exec($sql);
echo '<div class="echo"> Table "Gîtes Occupés" bien créée ⚔🏡 </div>'; 
}
catch(PDOException $e){
echo ' Erreur lors de la création de la table "Gîtes Occupés " ' . $e->getMessage();
}


//Création tables ▼ Gîtes ▼
$servname = 'localhost';
$dbname = 'gites';
$user = 'root';
$pass = '';
try{
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE IF NOT EXISTS mes_gites(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nom_gite VARCHAR(50) NOT NULL,
    Descript_gite VARCHAR(255) NOT NULL,
    Nbre_couchage INT,
    Nbre_sdb INT,
    Emplacement_geo VARCHAR(60) NOT NULL,
    Prix INT (5) NOT NULL,
    Photo URL NOT NULL;
    Disponible boolean)";


$dbco->exec($sql);
echo '<div class="echo"> Table "Mes gîtes" bien créée 🏡🏡🏡 </div>'; 
}
catch(PDOException $e){
echo ' Erreur lors de la création de la table "Mes gîtes" ' . $e->getMessage();
}*/
?>