<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", uniqueConstraints={@ORM\UniqueConstraint(name="NumFournisseur", columns={"NumFournisseur"})}, indexes={@ORM\Index(name="IDX_FOURNISSEUR_Nom", columns={"Nom"}), @ORM\Index(name="IDX_FOURNISSEUR_Societe", columns={"Societe"}), @ORM\Index(name="IDX_FOURNISSEUR_Telephone", columns={"Telephone"}), @ORM\Index(name="IDX_FOURNISSEUR_Fax", columns={"Fax"}), @ORM\Index(name="IDX_FOURNISSEUR_AdresseEMail", columns={"AdresseEMail"}), @ORM\Index(name="IDX_FOURNISSEUR_GSM", columns={"GSM"}), @ORM\Index(name="IDX_FOURNISSEUR_CodePostal", columns={"CodePostal"}), @ORM\Index(name="IDX_FOURNISSEUR_Ville", columns={"Ville"})})
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=25, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=40, nullable=false)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=150, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=15, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=15, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseEMail", type="string", length=30, nullable=false)
     */
    private $adresseemail;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=15, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="GSM", type="string", length=15, nullable=false)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="Observations", type="text", nullable=false)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=5, nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Civilite", type="string", length=5, nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomFournisseur", type="string", length=25, nullable=false)
     */
    private $prenomfournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseSuite", type="string", length=150, nullable=false)
     */
    private $adressesuite;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumFournisseur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numfournisseur;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Fournisseur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set societe
     *
     * @param string $societe
     * @return Fournisseur
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    
        return $this;
    }

    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Fournisseur
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
     * Set telephone
     *
     * @param string $telephone
     * @return Fournisseur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Fournisseur
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set adresseemail
     *
     * @param string $adresseemail
     * @return Fournisseur
     */
    public function setAdresseemail($adresseemail)
    {
        $this->adresseemail = $adresseemail;
    
        return $this;
    }

    /**
     * Get adresseemail
     *
     * @return string 
     */
    public function getAdresseemail()
    {
        return $this->adresseemail;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Fournisseur
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     * @return Fournisseur
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;
    
        return $this;
    }

    /**
     * Get gsm
     *
     * @return string 
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return Fournisseur
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    
        return $this;
    }

    /**
     * Get observations
     *
     * @return string 
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Fournisseur
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    
        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Fournisseur
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
     * Set civilite
     *
     * @param string $civilite
     * @return Fournisseur
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set prenomfournisseur
     *
     * @param string $prenomfournisseur
     * @return Fournisseur
     */
    public function setPrenomfournisseur($prenomfournisseur)
    {
        $this->prenomfournisseur = $prenomfournisseur;
    
        return $this;
    }

    /**
     * Get prenomfournisseur
     *
     * @return string 
     */
    public function getPrenomfournisseur()
    {
        return $this->prenomfournisseur;
    }

    /**
     * Set adressesuite
     *
     * @param string $adressesuite
     * @return Fournisseur
     */
    public function setAdressesuite($adressesuite)
    {
        $this->adressesuite = $adressesuite;
    
        return $this;
    }

    /**
     * Get adressesuite
     *
     * @return string 
     */
    public function getAdressesuite()
    {
        return $this->adressesuite;
    }

    /**
     * Get numfournisseur
     *
     * @return integer 
     */
    public function getNumfournisseur()
    {
        return $this->numfournisseur;
    }
}
