<?php 

  
/** 
class Ordinateur
{
  public $marque;
  public $memoir;
  public $disk;

  public function __construct($marque , $memoir , $disk )
  {
    $this->marque=$marque;
    $this->memoir = $memoir;
    $this->disk = $disk;
  
 }
 public function Affiche(){
  return "$this->marque - $this->memoir  Go- $this->disk Terra";
 }
}
class Laptop extends Ordinateur
{
  
  public $tactile;
  public $webcam;
  public $batterie;
  public function __construct($marque, $memoir ,$disk, $tactil,$webcam, $batterie)

  
  {
  parent:: __construct($marque, $memoir ,$disk);
  $this->tactil = $tactil;
   $this->batterie = $batterie;
    $this->webcam = $webcam;
  }
  public function Affiche(){
    return "$this->marque - $this->memoir Go- $this->disk Terra - $this->batterie";
  }
}

  $Laptop = new Laptop("DELL", 4,1,true,true, "4H");
   echo $Laptop->Affiche();
  
  */
   class Vehicule{
    public $genre;
    public $nbroue;
    public $matricul;
    public $boite_vitesse;
    public function __construct($genre, $nbroue, $matricul, $boite_vitesse){
      $this->genre = $genre;
      $this->nbroue = $nbroue;
      $this->matricul = $matricul;
      $this->boite_vitesse= $boite_vitesse;


    }
    public function Affiche(){
     return "$this->genre-$this->nbroue -$this->matricul - $this->boite_vitesse " ;
    }
    public function Roule($vmax,$nbrs){
      return "<h3>j'ai une vitesse maximal de $vmax /Heure en $nbrs second</h3>";

    }
   }
   class Automobile extends Vehicule
   {

public $nbplace;
public $signalisation;
public function __construct($genre, $nbroue, $matricul, $boite_vitesse,$nbplace,$signalisation){
  parent:: __construct($genre, $nbroue, $matricul, $boite_vitesse);
  $this->nbplace = $nbplace;
  $this->signalisation=$signalisation;
}
public function Roule($vmax,$nbrs){
      return "<h3>j'ai une vitesse maximal de $vmax /Heure en $nbrs second</h3>";

}


   }
 
$veh = new Vehicule("toyato" , 4 , "GT-5477", 24);
echo $veh->Affiche();
echo  $veh->Roule( 13,16);
$au = new Automobile("jeep" , 4, 436, "true" , 45, "true");
 echo $au->Affiche();
 echo $au->Roule(23,87); 
 ?>
  

