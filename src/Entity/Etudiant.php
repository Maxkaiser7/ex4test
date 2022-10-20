<?php
namespace App\Demo\Entity;

class Etudiant extends Personnes
{
    private string $cours_suivis;
    private string $niveau;
    private $dateInscription;

    public function __construct( string $nom, string $prenom, string $adresse, string $codePostal, string $pays, $cours_suivis, $niveau, $dateInscription)
    {
        parent::__construct( $nom, $prenom, $adresse, $codePostal, $pays, $cours_suivis, $niveau, $dateInscription);
    }

    public function getCours(){
        //return $this->cours_suivis;
    }
    public function  setCours($cours_suivis){
        $this->cours_suivis=$cours_suivis;
    }

    public function getNiveau(){
        return $this->niveau;
    }
    public function  setNiveau($niveau){
        $this->niveau=$niveau;
    }
    	public function getDateInscription(){
            return $this->dateInscription;
        }
	public function setDateInscription($dateInscription){
        $this->dateInscription = $dateInscription;
    }
    	public function __toString(){
            return $this->getPrenom() . ", " . $this->getNom() . " cours: " . $this->cours_suivis;
        }
}