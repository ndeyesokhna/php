<?php
    try {
        $bdd = new PDO( 'mysql:host=localhost;dbname=G1;charset=utf8', 'dieynaba', 'diallo');
       //$req="SELECT  users.nom,users.prenom, laptop.code_laptop FROM users INNER JOIN laptop ON users.laptop_id=laptop.id";
       //$selection=$bdd->query($req);
      // $insert="INSERT INTO users (nom,prenom,email) VALUES('diallo','dieynaba','dd@gmail.com')";
      //$bdd->exec($insert);
      //$update="UPDATE users SET nom='diallo',prenom='ousmane' WHERE id=21";
      // $bdd->exec($update);
      //requete prepare
      $genre=1;
      $selection=$bdd->prepare("SELECT  users.nom,users.prenom FROM users WHERE genre=? AND id=?");
      $selection->execute([$genre,17]);      //$insert=$bdd->prepare("INSERT INTO users (nom,prenom,email) VALUES(?,?,?)");
      //$insert->execute(['dd','dieyna','dd@gmail']);
      $insert=$bdd->prepare("INSERT INTO users (nom,prenom,email) VALUES(:nom,:prenom,:email)");
      $insert->execute([
          "nom"=>'raby',
         "prenom"=>'ndiath',
         "email"=>'dd@gmail']);    
           $delete="DELETE FROM users WHERE id =21";
      $bdd->exec($delete);   
     } catch (PDOException $e) { 
               echo" C PAS BON".$e->getMessage();
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
 <table class="table">
     <tr>
        <td>NOM</td>
        <td>PRENOM</td>        </tr>
        <tr>
       <?php
        while ($donnees = $selection->fetch()){
        echo"  <tr><td>$donnees[nom]</td>";
        echo"<td>$donnees[prenom]</td>";       }
        ?>        </table></body>
</html>


