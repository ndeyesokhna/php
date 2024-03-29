<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
</head>
<body>
    <?php echo @$_GET['users_id']; ?>
    <div class="container">
        <div class="row justify-content-center">
    <?php
        try {
             $bdd = new PDO('mysql:host=localhost;dbname=GOUPE1;charset=utf8','sokhna', '3553486nst');
             $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'echec connexion'.$e->getMessage();
        }



      if(isset($_POST['nom']) AND !empty($_POST['nom'])){
            $requete=$bdd->prepare("INSERT INTO users ( id,nom,prenom,email,genre)
                            VALUES (:nom, :prenom, :email, :genre)
                               ");
             if($requete->execute(["nom"=>$_POST['nom'],
                                        "prenom"=>$_POST['prenom'],
                                        "email"=>$_POST['email'],
                                        "genre"=>$_POST['genre'],
                                        ]))
               echo '<div class="col-6 ">
                <h3 class="text-centered alert alert-success">Vos donnees ont ete bien enregistrees</h3>
            </div>';
           else 
               echo '<div class="col-6 ">
                <h3 class="text-centered alert alert-danger">Erreurs enregistrement</h3>
            </div>';
      }

    //REcuperation des donnees
    $req = $bdd->query("SELECT id,nom,prenom,email FROM users ORDER BY id DESC");

     ?>
            
            <div class="container">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $i=0;
                        while ($donnees = $req->fetch()) {
                    ?>
                    <tr>
                      <th scope="row"><?= ++$i; ?></th>
                      <td><a class="text-link" href="user.php?user_id=<?= $donnees["id"]?>"><?= $donnees['nom']?></a></td>
                      <td><?= $donnees['prenom'] ?></td>
                      <td><?= $donnees['email']?></td>
                    </tr>
                <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>