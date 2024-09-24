<?php

namespace App\Entity;

use Symfony\Component\Form\Extension\Validator;


class FormInscription
{
    private $nom;

    /**
     * @param $nom
     * @param $prenom
     * @param $dateNaissance
     * @param $lieuNaissance
     * @param $adresse
     * @param $complementAdresse
     * @param $numTel
     * @param $email
     * @param $anneeCours

     */
    public function __construct($nom, $prenom, $dateNaissance, $lieuNaissance, $adresse, $complementAdresse, $numTel, $email, $anneeCours)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->lieuNaissance = $lieuNaissance;
        $this->adresse = $adresse;
        $this->complementAdresse = $complementAdresse;
        $this->numTel = $numTel;
        $this->email = $email;
        $this->anneeCours = $anneeCours;
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

    private $prenom;

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

    private $dateNaissance;

    private $lieuNaissance;

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

    private $adresse;

    /**
     * @return mixed
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * @param mixed $lieuNaissance
     */
    public function setLieuNaissance($lieuNaissance): void
    {
        $this->lieuNaissance = $lieuNaissance;
    }

    /**
     * @return mixed
     */
    public function getAnneeCours()
    {
        return $this->anneeCours;
    }

    /**
     * @param mixed $anneeCours
     */
    public function setAnneeCours($anneeCours): void
    {
        $this->anneeCours = $anneeCours;
    }

    private $complementAdresse;

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

    private $numTel;

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

    private $email;

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
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    private $anneeCours;


}