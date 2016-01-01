<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collaborateur
 *
 * @ORM\Table(name="collaborateur", uniqueConstraints={@ORM\UniqueConstraint(name="NomPrenom", columns={"NomPrenom"})}, indexes={@ORM\Index(name="IDX_COLLABORATEUR_CodePostal", columns={"CodePostal"}), @ORM\Index(name="IDX_COLLABORATEUR_Ville", columns={"Ville"}), @ORM\Index(name="IDX_COLLABORATEUR_Telephone", columns={"Telephone"})})
 * @ORM\Entity
 */
class Collaborateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="Civilite", type="string", length=5, nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="NomPrenom", type="string", length=20, nullable=false)
     */
    private $nomprenom;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreProfessionnel", type="string", length=40, nullable=false)
     */
    private $titreprofessionnel;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=150, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=5, nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=40, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=15, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroAbrege", type="string", length=4, nullable=false)
     */
    private $numeroabrege;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=14, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroGSM", type="string", length=14, nullable=false)
     */
    private $numerogsm;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="AdressEmail", type="string", length=80, nullable=false)
     */
    private $adressemail;

    /**
     * @var string
     *
     * @ORM\Column(name="Poste", type="string", length=8, nullable=false)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="blob", nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseSuite", type="string", length=150, nullable=false)
     */
    private $adressesuite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCollaborateur", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcollaborateur;



    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Collaborateur
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
     * Set nomprenom
     *
     * @param string $nomprenom
     * @return Collaborateur
     */
    public function setNomprenom($nomprenom)
    {
        $this->nomprenom = $nomprenom;
    
        return $this;
    }

    /**
     * Get nomprenom
     *
     * @return string 
     */
    public function getNomprenom()
    {
        return $this->nomprenom;
    }

    /**
     * Set titreprofessionnel
     *
     * @param string $titreprofessionnel
     * @return Collaborateur
     */
    public function setTitreprofessionnel($titreprofessionnel)
    {
        $this->titreprofessionnel = $titreprofessionnel;
    
        return $this;
    }

    /**
     * Get titreprofessionnel
     *
     * @return string 
     */
    public function getTitreprofessionnel()
    {
        return $this->titreprofessionnel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Collaborateur
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
     * Set codepostal
     *
     * @param string $codepostal
     * @return Collaborateur
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
     * @return Collaborateur
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
     * Set telephone
     *
     * @param string $telephone
     * @return Collaborateur
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
     * Set numeroabrege
     *
     * @param string $numeroabrege
     * @return Collaborateur
     */
    public function setNumeroabrege($numeroabrege)
    {
        $this->numeroabrege = $numeroabrege;
    
        return $this;
    }

    /**
     * Get numeroabrege
     *
     * @return string 
     */
    public function getNumeroabrege()
    {
        return $this->numeroabrege;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Collaborateur
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
     * Set numerogsm
     *
     * @param string $numerogsm
     * @return Collaborateur
     */
    public function setNumerogsm($numerogsm)
    {
        $this->numerogsm = $numerogsm;
    
        return $this;
    }

    /**
     * Get numerogsm
     *
     * @return string 
     */
    public function getNumerogsm()
    {
        return $this->numerogsm;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Collaborateur
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set adressemail
     *
     * @param string $adressemail
     * @return Collaborateur
     */
    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;
    
        return $this;
    }

    /**
     * Get adressemail
     *
     * @return string 
     */
    public function getAdressemail()
    {
        return $this->adressemail;
    }

    /**
     * Set poste
     *
     * @param string $poste
     * @return Collaborateur
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    
        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Collaborateur
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set adressesuite
     *
     * @param string $adressesuite
     * @return Collaborateur
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
     * Get idcollaborateur
     *
     * @return integer 
     */
    public function getIdcollaborateur()
    {
        return $this->idcollaborateur;
    }
}
