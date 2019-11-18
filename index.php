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
    protected $genre;
     protected$nbroue;
    protected $matricul;
   protected $boite_vitesse; 
   protected $vmax;
   protected  $nbrs;

    public function __construct($genre, $nbroue, $matricul, $boite_vitesse ,$vmax,$nbrs){
      $this->genre = $genre;
      $this->nbroue = $nbroue;
      $this->matricul = $matricul;
      $this->boite_vitesse= $boite_vitesse;
      $this->vmax = $vmax;
      $this->nbrs = $nbrs;


    }

    public function Affiche(){
     return "$this->genre-$this->nbroue -$this->matricul - $this->boite_vitesse " ;

  }   
     public function getGenre(){
      return "sokhna" .ucfirst($this->genre);
     }


      public function setGenre($valeure){
  
      return $this->genre=$valeure;
     }
      public function getNbrs(){
      return  "nombre" .ucfirst($this->nbrs);
     }

      public function setNbrs($valeure){
      return $this->nbrs = $valeure;
     }
     public function getVmax(){
      return "vitesse" .ucfirst($this->vmax);
     }

      public function setVmax($valeure){
      return $this->vmax = $valeure;
     }


    

    public function Roule(){
      return "<h3>j'ai une vitesse maximal de $this->vmax /Heure en $this->nbrs second</h3>";

    }


   }
   /*
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

   */
 
$veh = new Vehicule("toyato" ,4, "GT-5477", 24," 25h ",5);
echo $veh->Affiche();
echo  $veh->Roule();
 $veh->setGenre("renault");
 echo "<h1>".$veh->getGenre()."</h1>";
 $veh->setVmax("27h");
 echo "<h2>" .$veh->getVmax(). "</h2>";
 $veh->setNbrs(7);
 echo "<h3>".$veh->getNbrs()."</h3>";
 echo  $veh->Roule();

/*$au = new Automobile("jeep" , 4, 436, "true" , 45, "true");
 echo $au->Affiche();
 echo $au->Roule(23,87); 
 echo "<h2>".$au->getGenre()."</h2>";

*/
 ?>
  

