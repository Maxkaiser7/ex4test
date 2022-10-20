<?php
namespace App\Demo\Manager;

use App\Demo\Entity\Enseignant;
use Faker\Factory;
use Faker\Provider\DateTime;

class EnseignantManager extends EntityManager{

    public function checkAnciennete($enseignant){
        //les fonctions viennent de l'entity
        $firstdate = new DateTime($enseignant->getDateEntree());
        $secondDate = new DateTime(date("Y/m/d"));
        //diff fonctions php
        $intvl = $firstdate->diff($secondDate);

        // mise a jour de l'anciennete
        if($enseignant->getAnciennete() != $intvl->y) {
            $enseignant->setAnciennete($intvl->y);
            $this->update($enseignant);
        }
    }

    public function create($enseignant){
        //ici enregistrement en DB de votre objet enseignant
        $stmt = $this->getConnexion()->prepare(
            'INSERT INTO enseignant SET nom:=nom, prenom:=prenom, adresse=:adresse, codePostal:=codePostal, coursDonnes:=coursDonnes, dateEntree:=dateEntree'
        );
        $stmt->bindValue(':nom', $enseignant->getNom());
        $stmt->bindValue(':prenom', $enseignant->getPrenom());
        $stmt->bindValue(':adresse', $enseignant->getAdresse());
        $stmt->bindValue(':codePostal', $enseignant->getCodePostal());
        $stmt->bindValue(':coursDonnes', $enseignant->getCoursDonnes());
        $stmt->bindValue(':dateEntree', $enseignant->getDateEntree());
        $stmt->bindValue(':anciennete', $enseignant->getAnciennete());
    }

    public function read($id){

    }

    public function readAll(){

    }

    public function update($enseignant){

    }

    function delete($id){

    }
}

