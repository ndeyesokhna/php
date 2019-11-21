<?php

class Personnes
{
    protected $nom;
    protected $prenom;
    protected $email;
    protected $passwords;

 public function __construct( $nom ,$prenom ,$email, $passwords)
 {
     $this->nom = $nom;
     $this->prenom = $prenom;
     $this->email = $email;
     $this->password = $passwords;

 }   
public function getNom ()

{
    return $this->nom;
}
public function setNom ($nom)

{
    return $this->nom = $Nom;
}
public function getPrenom ()

{
    return $this->prenom;
}
public function setPrenom ( $prenom)

{
    return $this->prenom = $prenom;

}
public function getEmail(){
    return $this->email;
}
public function setEmail($email){
    return $this->email = $email;
}
public function getPasswords(){
    return $this->passwords;
}
public function setPasswords($passwords){
    return $this->passwords = $passwords;

}
public function Affiche (){
    return "$this->nom  $this->prenom  $this->email  $this->passwords ";
}

}


$per = new Personnes( "toure" , "ndeye sokhna" , "sokhnatoure454@gmail.com", "sokhna12");

echo $per->Affiche();

























?>