<?php
class Vehicule
{
    protected $genre;
    protected $nbrRoues;
    protected $matricule;
    protected $boite_vitesse;    public function __construct($genre, $nbrRoues, $matricule, $boite_vitesse)
    {
        $this->genre             = $genre;
        $this->nbrRoues         = $nbrRoues;
        $this->matricule         = $matricule;
        $this->boite_vitesse     = $boite_vitesse;
    }    public function getGenre(){
        return $this->genre;
    }    public function getNbrRoues(){
        return $this->nbrRoues;
    }    public function getMatricule(){
        return $this->matricule;
    }    public function getBoiteVitesse(){
        return $this->boite_vitesse;
    }
    public function Afficher(){
        return "<h1>$this->genre</h1>
                <strong>Nbr Roues: </strong>$this->nbrRoues
                <strong>Matricule: </strong>$this->matricule
                <strong>Boite a vitesse: </strong>$this->boite_vitesse
                ";
    }
    public function rouler($nbrScd, $Vmax){
        return "<h3>J'atteins ma vitesse maximale de $Vmax /Heure en $nbrScd secondes</h3>";
    }
}$vehicule = new Vehicule("Voiture", 4, "DK 2394 BG", 'Automatique');
echo $vehicule->Afficher();
echo $vehicule->rouler(2.4,180);
echo $vehicule->getGenre();/**
*
*/
class Automobile extends Vehicule
{
    
    public $nbr_place;
    public $signalisation;    public function __construct($genre, $nbrRoues, $matricule, $boite_vitesse, $nbr_place, $signalisation)
    {
        parent:: __construct($genre, $nbrRoues, $matricule, $boite_vitesse);
        $this->nbr_place = $nbr_place;
        $this->signalisation = $signalisation;
    }    public function rouler($nbrScd, $Vmax){
        return "<h3>J'atteins ma vitesse maximale de $Vmax /Heure en $nbrScd secondes</h3>";
    }
}    /**
*
*/
class Camion extends Vehicule
{
    public $tonnage;
    public $typeChargement;
    
    function __construct($genre,$nbrRoues,$matricule,$boite_vitesse,$tonnage,$typeChargement)
    {
        parent::__construct($genre,$nbrRoues,$matricule,$boite_vitesse);
        $this->tonnage=$tonnage;
        $this->typeChargement=$typeChargement;
    }
    public function Afficher(){
        return "<h1>$this->genre</h1>
                <strong>Nbr Roues: </strong>$this->nbrRoues
                <strong>Matricule: </strong>$this->matricule
                <strong>Boite a vitesse: </strong>$this->boite_vitesse
                <strong>Tonnage: </strong>$this->tonnage
                <strong>type chargement: </strong>$this->typeChargement
                ";
    }
    
}$automobile = new Automobile("Jeep",'4','5432','true','45','true');
echo $automobile->Afficher();echo $automobile->rouler(10, 300);$automobile2 = new Automobile("Toyota",'7','0987','true','5','true');
echo $automobile2->Afficher();echo $automobile2->rouler(80, 150);$autoM1= new Camion("camion", 8, "dk 3567 aa","manuelle", "2T","brute");
echo $autoM1->afficher();
echo $autoM1->rouler(30, 100);/*
*/
/**
*
*/
class moto extends Vehicule
{
    public $typemoteur;    
    public function __construct($genre,$nbrRoues,$matricule,$boite_vitesse,$typemoteur){
        parent::__construct($genre,$nbrRoues,$matricule,$boite_vitesse);
 $this->typemoteur=$typemoteur;        }}
$automobile3=new moto("enzin","2","dk 2806","100km/h","diesel");
echo $automobile3->afficher();