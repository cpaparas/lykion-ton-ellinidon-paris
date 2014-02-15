<?php
// src/Lte/SpectacleBunble/Entity/Spectacle.php
namespace Lte\SpectacleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="spectacle")
 */
class Spectacle 
{

	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nbr_danseurs;
	
	/**
	 * @ORM\Column(type="date")
	 */
	protected $date_spectacle;

    /**
     * @ORM\Column(type="date",nullable=true)
     */
    protected $date_spectacle_fin;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $description;

	/**
	 * @ORM\Column(type="string",length=255)
	 */
	protected $lieu;

	/**
	 * @ORM\Column(type="string",length=255,nullable=true)
	 */
	protected $adresse;

	/**
	 * @ORM\Column(type="string",length=255,nullable=true)
	 */
	protected $ville;

	/**
	 * @ORM\Column(type="string",length=5,nullable=true)
	 */
	protected $code_postal;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Spectacle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set nbr_danseurs
     *
     * @param integer $nbrDanseurs
     * @return Spectacle
     */
    public function setNbrDanseurs($nbrDanseurs)
    {
        $this->nbr_danseurs = $nbrDanseurs;

        return $this;
    }

    /**
     * Get nbr_danseurs
     *
     * @return integer 
     */
    public function getNbrDanseurs()
    {
        return $this->nbr_danseurs;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Spectacle
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Spectacle
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Spectacle
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Spectacle
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set code_postal
     *
     * @param string $codePostal
     * @return Spectacle
     */
    public function setCodePostal($codePostal)
    {
        $this->code_postal = $codePostal;

        return $this;
    }

    /**
     * Get code_postal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * Set date_spectacle
     *
     * @param \DateTime $dateSpectacle
     * @return Spectacle
     */
    public function setDateSpectacle($dateSpectacle)
    {
        $this->date_spectacle = $dateSpectacle;

        return $this;
    }

    /**
     * Get date_spectacle
     *
     * @return \DateTime 
     */
    public function getDateSpectacle()
    {
        return $this->date_spectacle;
    }

    /**
     * Set date_spectacle_fin
     *
     * @param \DateTime $dateSpectacleFin
     * @return Spectacle
     */
    public function setDateSpectacleFin($dateSpectacleFin)
    {
        $this->date_spectacle_fin = $dateSpectacleFin;

        return $this;
    }

    /**
     * Get date_spectacle_fin
     *
     * @return \DateTime 
     */
    public function getDateSpectacleFin()
    {
        return $this->date_spectacle_fin;
    }
}
