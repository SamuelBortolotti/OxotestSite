<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity
 * @ORM\Table(name="professeurs")
 */

class ORMProf
{
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getComplementAdresse()
    {
        return $this->complementAdresse;
    }

    /**
     * @param mixed $complementAdresse
     */
    public function setComplementAdresse($complementAdresse): void
    {
        $this->complementAdresse = $complementAdresse;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param mixed $numTel
     */
    public function setNumTel($numTel): void
    {
        $this->numTel = $numTel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->Matiere;
    }

    /**
     * @param mixed $Matiere
     */
    public function setMatiere($Matiere): void
    {
        $this->Matiere = $Matiere;
    }
    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @ORM\Column(type="string")
     */
    private $prenom;


    /**
     * @ORM\Column(type="string")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $complementAdresse;

    /**
     * @ORM\Column(type="string")
     */
    private $numTel;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Matiere;

    /**
     * @param $nom
     * @param $prenom
     * @param $adresse
     * @param $complementAdresse
     * @param $numTel
     * @param $email
     * @param $Matiere
     */
    public function __construct($nom, $prenom, $adresse, $complementAdresse, $numTel, $email, $Matiere)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->complementAdresse = $complementAdresse;
        $this->numTel = $numTel;
        $this->email = $email;
        $this->Matiere = $Matiere;
    }
}