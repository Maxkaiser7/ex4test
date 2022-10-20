<?php
require_once '../vendor/autoload.php';

use App\Demo\Connexion;
use App\Demo\Manager\PersonneManager;
use ISL\Manager\EnseignantManager;
use App\Demo\Manager\EtudiantManager;
use App\Demo\Entity\Enseignant;
use App\Demo\Entity\Etudiant;
$connexion = new PDO('mysql:host=localhost;dbname=test_personne','root','root');

$personManager = new PersonneManager($connexion);
echo $personManager->getConnexion();
//création via faker
$personArray = $personManager->create(2);

// creer un Etudiant
$etudiant = new Etudiant($personArray[0]['nom'],$personArray[0]['prenom'],$personArray[0]['adresse'],$personArray[0]['codePostal'],$personArray[0]['pays'],'POO',2,'2021/10/10');
//var_dump($etudiant);

$etudiantManager = new EtudiantManager(Connexion::getConnexion());
$etudiantInsert = $etudiantManager->insert($etudiant);
var_dump($etudiantManager);
/*
 *  $etudiant = new Etudiant($personArray[0]['prenom'],$personArray[0]['nom'],
		$personArray[0]['adresse'],$personArray[0]['codePostal'],
		"POO", 3,"2021/10/10");
*/