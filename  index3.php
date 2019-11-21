<?php

try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=GOUPE1;charset=utf8', 'sokhna', '3553486nst');
    echo "connection";
} catch (PDOExeption $e) {
    echo "erreur de connection".$e->getMessage();
}
?>





<!DOCTYPE html>
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