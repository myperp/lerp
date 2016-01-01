<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="IDX_COMMANDE_DateCommande", columns={"DateCommande"}), @ORM\Index(name="IDX_COMMANDE_NumClient", columns={"NumClient"}), @ORM\Index(name="IDX_COMMANDE_EtatCommande", columns={"EtatCommande"}), @ORM\Index(name="IDX_COMMANDE_SaisiPar", columns={"SaisiPar"}), @ORM\Index(name="IDX_COMMANDE_TypeCommande", columns={"TypeCommande"}), @ORM\Index(name="IDX_COMMANDE_ModeReglement", columns={"ModeReglement"}), @ORM\Index(name="IDX_COMMANDE_OptimCleComp_1", columns={"TypeCommande", "SaisiPar", "NumClient", "ModeReglement", "EtatCommande", "DateCommande"}), @ORM\Index(name="IDX_COMMANDE_OptimCleComp_2", columns={"TypeCommande", "SaisiPar", "ModeReglement", "EtatCommande", "DateCommande"}), @ORM\Index(name="IDX_COMMANDE_OptimCleComp_3", columns={"TypeCommande", "DateCommande"}), @ORM\Index(name="IDX_COMMANDE_OptimCleComp_4", columns={"TypeCommande", "NumClient", "DateCommande"}), @ORM\Index(name="IDX_COMMANDE_OptimCleComp_5", columns={"TypeCommande", "EtatCommande", "DateCommande"}), @ORM\Index(name="IDX_COMMANDE_OptimCleComp_6", columns={"NumClient", "DateCommande"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCommande", type="date", nullable=false)
     */
    private $datecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalHT", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $totalht;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTTC", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $totalttc;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTVA", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $totaltva;

    /**
     * @var integer
     *
     * @ORM\Column(name="EtatCommande", type="integer", nullable=false)
     */
    private $etatcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="SaisiPar", type="string", length=20, nullable=false)
     */
    private $saisipar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SaisiLe", type="date", nullable=false)
     */
    private $saisile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFacturation", type="date", nullable=false)
     */
    private $datefacturation;

    /**
     * @var string
     *
     * @ORM\Column(name="Observations", type="text", nullable=false)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeCommande", type="integer", nullable=false)
     */
    private $typecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseFacturation", type="string", length=200, nullable=false)
     */
    private $adressefacturation;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseLivraison", type="string", length=200, nullable=false)
     */
    private $adresselivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="ModeReglement", type="string", length=40, nullable=false)
     */
    private $modereglement;

    /**
     * @var string
     *
     * @ORM\Column(name="NumCommandeClient", type="string", length=20, nullable=false)
     */
    private $numcommandeclient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateExigibilite", type="date", nullable=false)
     */
    private $dateexigibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="Transporteur", type="string", length=20, nullable=false)
     */
    private $transporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="DelaiPaiement", type="string", length=20, nullable=false)
     */
    private $delaipaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPAQ", type="integer", nullable=false)
     */
    private $numpaq;

    /**
     * @var string
     *
     * @ORM\Column(name="RIB", type="string", length=20, nullable=false)
     */
    private $rib;

    /**
     * @var string
     *
     * @ORM\Column(name="LCR", type="string", length=20, nullable=false)
     */
    private $lcr;

    /**
     * @var string
     *
     * @ORM\Column(name="Banque", type="string", length=20, nullable=false)
     */
    private $banque;

    /**
     * @var string
     *
     * @ORM\Column(name="FraisPort", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $fraisport;

    /**
     * @var string
     *
     * @ORM\Column(name="COD", type="string", length=20, nullable=false)
     */
    private $cod;

    /**
     * @var string
     *
     * @ORM\Column(name="Divers", type="string", length=20, nullable=false)
     */
    private $divers;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCommande", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcommande;

    /**
     * @var \CrmBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="CrmBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NumClient", referencedColumnName="NumClient")
     * })
     */
    private $numclient;



    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     * @return Commande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;
    
        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime 
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set totalht
     *
     * @param string $totalht
     * @return Commande
     */
    public function setTotalht($totalht)
    {
        $this->totalht = $totalht;
    
        return $this;
    }

    /**
     * Get totalht
     *
     * @return string 
     */
    public function getTotalht()
    {
        return $this->totalht;
    }

    /**
     * Set totalttc
     *
     * @param string $totalttc
     * @return Commande
     */
    public function setTotalttc($totalttc)
    {
        $this->totalttc = $totalttc;
    
        return $this;
    }

    /**
     * Get totalttc
     *
     * @return string 
     */
    public function getTotalttc()
    {
        return $this->totalttc;
    }

    /**
     * Set totaltva
     *
     * @param string $totaltva
     * @return Commande
     */
    public function setTotaltva($totaltva)
    {
        $this->totaltva = $totaltva;
    
        return $this;
    }

    /**
     * Get totaltva
     *
     * @return string 
     */
    public function getTotaltva()
    {
        return $this->totaltva;
    }

    /**
     * Set etatcommande
     *
     * @param integer $etatcommande
     * @return Commande
     */
    public function setEtatcommande($etatcommande)
    {
        $this->etatcommande = $etatcommande;
    
        return $this;
    }

    /**
     * Get etatcommande
     *
     * @return integer 
     */
    public function getEtatcommande()
    {
        return $this->etatcommande;
    }

    /**
     * Set saisipar
     *
     * @param string $saisipar
     * @return Commande
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
     * Set saisile
     *
     * @param \DateTime $saisile
     * @return Commande
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
     * Set datefacturation
     *
     * @param \DateTime $datefacturation
     * @return Commande
     */
    public function setDatefacturation($datefacturation)
    {
        $this->datefacturation = $datefacturation;
    
        return $this;
    }

    /**
     * Get datefacturation
     *
     * @return \DateTime 
     */
    public function getDatefacturation()
    {
        return $this->datefacturation;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return Commande
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
     * Set typecommande
     *
     * @param integer $typecommande
     * @return Commande
     */
    public function setTypecommande($typecommande)
    {
        $this->typecommande = $typecommande;
    
        return $this;
    }

    /**
     * Get typecommande
     *
     * @return integer 
     */
    public function getTypecommande()
    {
        return $this->typecommande;
    }

    /**
     * Set adressefacturation
     *
     * @param string $adressefacturation
     * @return Commande
     */
    public function setAdressefacturation($adressefacturation)
    {
        $this->adressefacturation = $adressefacturation;
    
        return $this;
    }

    /**
     * Get adressefacturation
     *
     * @return string 
     */
    public function getAdressefacturation()
    {
        return $this->adressefacturation;
    }

    /**
     * Set adresselivraison
     *
     * @param string $adresselivraison
     * @return Commande
     */
    public function setAdresselivraison($adresselivraison)
    {
        $this->adresselivraison = $adresselivraison;
    
        return $this;
    }

    /**
     * Get adresselivraison
     *
     * @return string 
     */
    public function getAdresselivraison()
    {
        return $this->adresselivraison;
    }

    /**
     * Set modereglement
     *
     * @param string $modereglement
     * @return Commande
     */
    public function setModereglement($modereglement)
    {
        $this->modereglement = $modereglement;
    
        return $this;
    }

    /**
     * Get modereglement
     *
     * @return string 
     */
    public function getModereglement()
    {
        return $this->modereglement;
    }

    /**
     * Set numcommandeclient
     *
     * @param string $numcommandeclient
     * @return Commande
     */
    public function setNumcommandeclient($numcommandeclient)
    {
        $this->numcommandeclient = $numcommandeclient;
    
        return $this;
    }

    /**
     * Get numcommandeclient
     *
     * @return string 
     */
    public function getNumcommandeclient()
    {
        return $this->numcommandeclient;
    }

    /**
     * Set dateexigibilite
     *
     * @param \DateTime $dateexigibilite
     * @return Commande
     */
    public function setDateexigibilite($dateexigibilite)
    {
        $this->dateexigibilite = $dateexigibilite;
    
        return $this;
    }

    /**
     * Get dateexigibilite
     *
     * @return \DateTime 
     */
    public function getDateexigibilite()
    {
        return $this->dateexigibilite;
    }

    /**
     * Set transporteur
     *
     * @param string $transporteur
     * @return Commande
     */
    public function setTransporteur($transporteur)
    {
        $this->transporteur = $transporteur;
    
        return $this;
    }

    /**
     * Get transporteur
     *
     * @return string 
     */
    public function getTransporteur()
    {
        return $this->transporteur;
    }

    /**
     * Set delaipaiement
     *
     * @param string $delaipaiement
     * @return Commande
     */
    public function setDelaipaiement($delaipaiement)
    {
        $this->delaipaiement = $delaipaiement;
    
        return $this;
    }

    /**
     * Get delaipaiement
     *
     * @return string 
     */
    public function getDelaipaiement()
    {
        return $this->delaipaiement;
    }

    /**
     * Set numpaq
     *
     * @param integer $numpaq
     * @return Commande
     */
    public function setNumpaq($numpaq)
    {
        $this->numpaq = $numpaq;
    
        return $this;
    }

    /**
     * Get numpaq
     *
     * @return integer 
     */
    public function getNumpaq()
    {
        return $this->numpaq;
    }

    /**
     * Set rib
     *
     * @param string $rib
     * @return Commande
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
     * Set lcr
     *
     * @param string $lcr
     * @return Commande
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
     * Set banque
     *
     * @param string $banque
     * @return Commande
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
     * Set fraisport
     *
     * @param string $fraisport
     * @return Commande
     */
    public function setFraisport($fraisport)
    {
        $this->fraisport = $fraisport;
    
        return $this;
    }

    /**
     * Get fraisport
     *
     * @return string 
     */
    public function getFraisport()
    {
        return $this->fraisport;
    }

    /**
     * Set cod
     *
     * @param string $cod
     * @return Commande
     */
    public function setCod($cod)
    {
        $this->cod = $cod;
    
        return $this;
    }

    /**
     * Get cod
     *
     * @return string 
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set divers
     *
     * @param string $divers
     * @return Commande
     */
    public function setDivers($divers)
    {
        $this->divers = $divers;
    
        return $this;
    }

    /**
     * Get divers
     *
     * @return string 
     */
    public function getDivers()
    {
        return $this->divers;
    }

    /**
     * Get numcommande
     *
     * @return integer 
     */
    public function getNumcommande()
    {
        return $this->numcommande;
    }

    /**
     * Set numclient
     *
     * @param \CrmBundle\Entity\Client $numclient
     * @return Commande
     */
    public function setNumclient(\CrmBundle\Entity\Client $numclient = null)
    {
        $this->numclient = $numclient;
    
        return $this;
    }

    /**
     * Get numclient
     *
     * @return \CrmBundle\Entity\Client 
     */
    public function getNumclient()
    {
        return $this->numclient;
    }
}
