<?php
namespace App\Demo\Manager;

use App\Demo\Entity\Personnes;
use Faker\Factory;
use App\Demo\Entity\Etudiant;
use App\Demo\Connexion;
use App\Demo\Manager\EntityManager;

class PersonneManager extends EntityManager {

    private static $connexion;


    public function __construct ($connexion) {
        parent::__construct($connexion);
    }
    public function setConnexion($connexion) : void{
        self::$connexion = $connexion;
    }

    public function getConnexion(){
        return self::$connexion;
    }
    public function create($number){
        $faker = Factory::create();
        $personArray = [];

        for($i = 0; $i < $number; $i++){
            $personArray[$i] = [
                'nom' => $faker->firstName,
                'prenom' => $faker->lastName,
                'adresse' => $faker->streetAddress,
                'codePostal' => $faker->postcode,
                'pays' => $faker->country
            ];
        }

        return $personArray;
    }
    public function read($id){

    }

    public function insert($etudiants)
    {
        // TODO: Implement insert() method.
        $stmt = parent::getConnexion()->prepare(
            'INSERT INTO etudiant SET nom=:nom,prenom=:prenom,adresse=:adresse,codepostal=:codepostal,pays=:pays,courssuivi=:courssuivi,niveau=:niveau,dateinscription=:dateinscription'
        );
        $stmt->bindValue(':nom', $etudiants->getNom());
        $stmt->bindValue(':prenom', $etudiants->getPrenom());
        $stmt->bindValue(':adresse', $etudiants->getAdresse());
        $stmt->bindValue(':codepostal', $etudiants->getCodePostal());
        $stmt->bindValue(':pays', $etudiants->getPays());
        $stmt->bindValue(':cours_suivis', $etudiants->getCours());
        $stmt->bindValue(':niveau', $etudiants->getNom());
        $stmt->bindValue(':dateinscription', $etudiants->getNom());
        var_dump($stmt);
        //$stmt->execute();
    }
    public function readAll(){
        // récupérer et les étudiants et les enseignants
    }
    public function update($personne){

    }
    function delete($id){

    }
}