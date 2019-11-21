<?php
try{
    $bdd = new PDO( 'mysql:host=localhost;dbname=GOUPE1;charset=utf8', 'sokhna', '3553486nst');
    $req="SELECT  users.nom,users.prenom, laptop.code_laptop FROM users INNER JOIN laptop ON users.laptop_id=laptop.id";
    $selection=$bdd->query($req);
    $insert="INSERT INTO users (nom,prenom,email) VALUES('toure','ndeyesokhna','sokhna@gmail.com')";
    $bdd->exec($insert);
    $update="UPDATE users SET nom='toure',prenom='ndeye' WHERE id=20";
    $bdd->exec($update);
}
 catch (PDOException $e) { 
    echo" C PAS BON".$e->getMessage();
}





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>