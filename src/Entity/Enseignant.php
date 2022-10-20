<?php

namespace App\Demo\Entity;


class Enseignant extends Personnes
{
    protected array $cours_donnes;
    protected int $anciennete;

    public function getCoursDonnes()
    {
        return $this->cours_donnes;
    }

    public function setCoursDonnes($cours_donnes)
    {
        $this->cours_donnes = $cours_donnes;
    }

    public function getDateDebut()
    {
        return $this->date_debut;
    }

    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }



}