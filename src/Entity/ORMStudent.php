<?php

namespace App\Entity;
use App\Repository\ORMStudentRepository;
use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity(repositoryClass=ORMStudentRepository::class)
 * @ORM\Table(name="etudiants")
 */
class ORMStudent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @ORM\Column(type="string")
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string")
     */
    private $lieuNaissance;

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
    private $anneeCours;
/*
    /**
     * @param $id
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
  /* public function __construct(int $id, string $nom, string $prenom, string $dateNaissance, string $lieuNaissance, string $adresse, string $complementAdresse, int $numTel, string $email, string $anneeCours)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->lieuNaissance = $lieuNaissance;
        $this->adresse = $adresse;
        $this->complementAdresse = $complementAdresse;
        $this->numTel = $numTel;
        $this->email = $email;
        $this->anneeCours = $anneeCours;

    } */


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

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


}
