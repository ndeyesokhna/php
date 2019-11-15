<?php 
/**
 * 
 */
class Eleve 
{
  public $nom;
  public $prenom;
  public $age;
  public $numerocarte;

  public function __construct($def_nom , $def_prenom , $def_age , $def_numerocarte)
  {
    $this->nom =$def_nom;
    $this->prenom = $def_prenom;
    $this->age = $def_age;
    $this->numerocarte = $def_numerocarte;
  }

  public function Afficheeleve()
  {
   echo "<h1>$this->nom</h1><h2>$this->prenom</h2><h3>$this->age</h3><h4>$this->numerocarte</h4>";

  }
}
$elev= new Eleve('Toure' ,'Ndeye Sokhna' ,23 , "2016066A");
$elev->Afficheeleve();



 ?>

