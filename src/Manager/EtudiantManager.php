<?php
namespace App\Demo\Manager;

use App\Demo\Entity\Etudiant;
use Faker\Factory;

class EtudiantManager extends PersonneManager
{
    public function getConnexion()
    {
        return parent::getConnexion(); // TODO: Change the autogenerated stub

    }
    public function setConnexion($connexion) : void
    {
        parent::setConnexion($connexion); // TODO: Change the autogenerated stub
    }

    public function __construct($connexion)
    {
        parent::__construct($connexion);
    }

    /*public function create($nombre): array{
        $faker = Factory::create('fr_BE');

        $etudiants = [];
        for($i = 1; $i <= $nombre; $i++){
            $etudiants[] = new Etudiant(
                0,
                $faker->lastName,
                $faker->firstName,
                $faker->address,
                $faker->postcode,
                $faker->country
            );
        }
        return $etudiants;
    }*/

/*    public function insert($etudiants)
    {
        // TODO: Implement insert() method.
        $stmt = $this->getConnexion()->prepare(
            'INSERT INTO etudiant SET nom=:nom,prenom=:prenom,adresse=:adresse,codepostal=:codepostal,pays=:pays,courssuivi=:courssuivi,niveau=:niveau,dateinscription=:dateinscription'
        );
        $stmt->bindValue(':nom', $etudiants->getNom());
        $stmt->bindValue(':prenom', $etudiants->getPrenom());
        $stmt->bindValue(':adresse', $etudiants->getAdresse());
        $stmt->bindValue(':codepostal', $etudiants->getCodePostal());
        $stmt->bindValue(':pays', $etudiants->getPays());
        $stmt->bindValue(':courssuivi', $etudiants->getCours());
        $stmt->bindValue(':niveau', $etudiants->getNom());
        $stmt->bindValue(':dateinscription', $etudiants->getNom());

        $stmt->execute();
    }*/

    public function read($id){

    }
    public function readAll(){

    }
    public function update($etudiant){

    }
    function delete($id){

    }
}