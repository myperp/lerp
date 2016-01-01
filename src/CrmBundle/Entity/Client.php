<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="IDX_CLIENT_Societe", columns={"Societe"}), @ORM\Index(name="IDX_CLIENT_NomClient", columns={"NomClient"}), @ORM\Index(name="IDX_CLIENT_Telephone", columns={"Telephone"}), @ORM\Index(name="IDX_CLIENT_Fax", columns={"Fax"}), @ORM\Index(name="IDX_CLIENT_AdresseEmail", columns={"AdresseEmail"}), @ORM\Index(name="IDX_CLIENT_Ville", columns={"Ville"}), @ORM\Index(name="IDX_CLIENT_GSM", columns={"GSM"}), @ORM\Index(name="IDX_CLIENT_Type", columns={"Type"}), @ORM\Index(name="IDX_CLIENT_SaisiPar", columns={"SaisiPar"}), @ORM\Index(name="IDX_CLIENT_AuteurModif", columns={"AuteurModif"}), @ORM\Index(name="IDX_CLIENT_CodePostal", columns={"CodePostal"}), @ORM\Index(name="IDX_CLIENT_DateModif", columns={"DateModif"}), @ORM\Index(name="IDX_CLIENT_AdresseEMailNomAdresse", columns={"AdresseEmail", "NomAdresse"}), @ORM\Index(name="IDX_CLIENT_OptimCleComp_1", columns={"Pays", "CodePostal"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="EnCoursAutorise", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $encoursautorise;

    /**
     * @var string
     *
     * @ORM\Column(name="Civilite", type="string", length=5, nullable=false)
     */
    private $civilite;

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
     * @ORM\Column(name="Pays", type="string", length=15, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="NomClient", type="string", length=20, nullable=false)
     */
    private $nomclient;

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
     * @ORM\Column(name="AdresseEmail", type="string", length=30, nullable=false)
     */
    private $adresseemail;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=30, nullable=false)
     */
    private $ville;

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
     * @var integer
     *
     * @ORM\Column(name="Type", type="smallint", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="SaisiPar", type="string", length=20, nullable=false)
     */
    private $saisipar;

    /**
     * @var string
     *
     * @ORM\Column(name="AuteurModif", type="string", length=20, nullable=false)
     */
    private $auteurmodif;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=5, nullable=false)
     */
    private $codepostal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SaisiLe", type="date", nullable=false)
     */
    private $saisile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModif", type="date", nullable=false)
     */
    private $datemodif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ExemptTVA", type="boolean", nullable=false)
     */
    private $exempttva;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomClient", type="string", length=20, nullable=false)
     */
    private $prenomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ARappeler", type="boolean", nullable=false)
     */
    private $arappeler;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseIP", type="string", length=50, nullable=false)
     */
    private $adresseip;

    /**
     * @var string
     *
     * @ORM\Column(name="Rcs", type="string", length=20, nullable=false)
     */
    private $rcs;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseSuite", type="string", length=150, nullable=false)
     */
    private $adressesuite;

    /**
     * @var string
     *
     * @ORM\Column(name="MotDePasse", type="string", length=50, nullable=false)
     */
    private $motdepasse;

    /**
     * @var string
     *
     * @ORM\Column(name="Question", type="string", length=50, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="Reponse", type="string", length=20, nullable=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="NomAdresse", type="string", length=20, nullable=false)
     */
    private $nomadresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="NumTVA", type="string", length=20, nullable=false)
     */
    private $numtva;

    /**
     * @var string
     *
     * @ORM\Column(name="LCR", type="string", length=20, nullable=false)
     */
    private $lcr;

    /**
     * @var string
     *
     * @ORM\Column(name="RIB", type="string", length=20, nullable=false)
     */
    private $rib;

    /**
     * @var string
     *
     * @ORM\Column(name="Banque", type="string", length=20, nullable=false)
     */
    private $banque;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClient", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numclient;



    /**
     * Set encoursautorise
     *
     * @param string $encoursautorise
     * @return Client
     */
    public function setEncoursautorise($encoursautorise)
    {
        $this->encoursautorise = $encoursautorise;
    
        return $this;
    }

    /**
     * Get encoursautorise
     *
     * @return string 
     */
    public function getEncoursautorise()
    {
        return $this->encoursautorise;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Client
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
     * Set societe
     *
     * @param string $societe
     * @return Client
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
     * @return Client
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
     * Set pays
     *
     * @param string $pays
     * @return Client
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
     * Set nomclient
     *
     * @param string $nomclient
     * @return Client
     */
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;
    
        return $this;
    }

    /**
     * Get nomclient
     *
     * @return string 
     */
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Set ville
     *
     * @param string $ville
     * @return Client
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
     * Set gsm
     *
     * @param string $gsm
     * @return Client
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
     * @return Client
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
     * Set type
     *
     * @param integer $type
     * @return Client
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set saisipar
     *
     * @param string $saisipar
     * @return Client
     */
    public function setSaisipar($saisipar)
    {
        $this->saisipar = $saisipar;
    
        return $this;
    }

    /**
     * Get saisipar
     *
     * @return string 
     */
    public function getSaisipar()
    {
        return $this->saisipar;
    }

    /**
     * Set auteurmodif
     *
     * @param string $auteurmodif
     * @return Client
     */
    public function setAuteurmodif($auteurmodif)
    {
        $this->auteurmodif = $auteurmodif;
    
        return $this;
    }

    /**
     * Get auteurmodif
     *
     * @return string 
     */
    public function getAuteurmodif()
    {
        return $this->auteurmodif;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Client
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
     * Set saisile
     *
     * @param \DateTime $saisile
     * @return Client
     */
    public function setSaisile($saisile)
    {
        $this->saisile = $saisile;
    
        return $this;
    }

    /**
     * Get saisile
     *
     * @return \DateTime 
     */
    public function getSaisile()
    {
        return $this->saisile;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return Client
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;
    
        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set exempttva
     *
     * @param boolean $exempttva
     * @return Client
     */
    public function setExempttva($exempttva)
    {
        $this->exempttva = $exempttva;
    
        return $this;
    }

    /**
     * Get exempttva
     *
     * @return boolean 
     */
    public function getExempttva()
    {
        return $this->exempttva;
    }

    /**
     * Set prenomclient
     *
     * @param string $prenomclient
     * @return Client
     */
    public function setPrenomclient($prenomclient)
    {
        $this->prenomclient = $prenomclient;
    
        return $this;
    }

    /**
     * Get prenomclient
     *
     * @return string 
     */
    public function getPrenomclient()
    {
        return $this->prenomclient;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Client
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
     * Set arappeler
     *
     * @param boolean $arappeler
     * @return Client
     */
    public function setArappeler($arappeler)
    {
        $this->arappeler = $arappeler;
    
        return $this;
    }

    /**
     * Get arappeler
     *
     * @return boolean 
     */
    public function getArappeler()
    {
        return $this->arappeler;
    }

    /**
     * Set adresseip
     *
     * @param string $adresseip
     * @return Client
     */
    public function setAdresseip($adresseip)
    {
        $this->adresseip = $adresseip;
    
        return $this;
    }

    /**
     * Get adresseip
     *
     * @return string 
     */
    public function getAdresseip()
    {
        return $this->adresseip;
    }

    /**
     * Set rcs
     *
     * @param string $rcs
     * @return Client
     */
    public function setRcs($rcs)
    {
        $this->rcs = $rcs;
    
        return $this;
    }

    /**
     * Get rcs
     *
     * @return string 
     */
    public function getRcs()
    {
        return $this->rcs;
    }

    /**
     * Set adressesuite
     *
     * @param string $adressesuite
     * @return Client
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
     * Set motdepasse
     *
     * @param string $motdepasse
     * @return Client
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
    
        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string 
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Client
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Client
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    
        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set nomadresse
     *
     * @param string $nomadresse
     * @return Client
     */
    public function setNomadresse($nomadresse)
    {
        $this->nomadresse = $nomadresse;
    
        return $this;
    }

    /**
     * Get nomadresse
     *
     * @return string 
     */
    public function getNomadresse()
    {
        return $this->nomadresse;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Client
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    
        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set numtva
     *
     * @param string $numtva
     * @return Client
     */
    public function setNumtva($numtva)
    {
        $this->numtva = $numtva;
    
        return $this;
    }

    /**
     * Get numtva
     *
     * @return string 
     */
    public function getNumtva()
    {
        return $this->numtva;
    }

    /**
     * Set lcr
     *
     * @param string $lcr
     * @return Client
     */
    public function setLcr($lcr)
    {
        $this->lcr = $lcr;
    
        return $this;
    }

    /**
     * Get lcr
     *
     * @return string 
     */
    public function getLcr()
    {
        return $this->lcr;
    }

    /**
     * Set rib
     *
     * @param string $rib
     * @return Client
     */
    public function setRib($rib)
    {
        $this->rib = $rib;
    
        return $this;
    }

    /**
     * Get rib
     *
     * @return string 
     */
    public function getRib()
    {
        return $this->rib;
    }

    /**
     * Set banque
     *
     * @param string $banque
     * @return Client
     */
    public function setBanque($banque)
    {
        $this->banque = $banque;
    
        return $this;
    }

    /**
     * Get banque
     *
     * @return string 
     */
    public function getBanque()
    {
        return $this->banque;
    }

    /**
     * Get numclient
     *
     * @return integer 
     */
    public function getNumclient()
    {
        return $this->numclient;
    }
}
