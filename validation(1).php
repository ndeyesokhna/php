<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["nom"])&&isset($_POST["prenom"])&&isset($_POST["email"])&&isset($_POST["genre"])){
        echo "le nom est :".$_POST["nom"];
        echo "le prenom est :".$_POST["prenom"];
        echo $_POST["email"];
        echo $_POST["genre"];

    }
    ?>
</body>
</html>