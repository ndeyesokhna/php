<?php
class Eleve extends Personnes
{

 protected $niveau;
 protected $notes;
 public function __construct($nom ,$prenom ,$email, $password ,$niveau )
 {
     parent:: __construct($nom ,$prenom ,$email, $password);
     $this->niveau = $niveau;

 }
 public function setNotes($tabnotes){
     if(!is_array($tabnotes) || empty($tabnotes);
     return $this->notes = [];

 }








}













?>