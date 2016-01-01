<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", uniqueConstraints={@ORM\UniqueConstraint(name="Reference", columns={"Reference"})}, indexes={@ORM\Index(name="IDX_PRODUIT_LibProd", columns={"LibProd"}), @ORM\Index(name="IDX_PRODUIT_PrixHT", columns={"PrixHT"}), @ORM\Index(name="IDX_PRODUIT_QteReappro", columns={"QteReappro"}), @ORM\Index(name="IDX_PRODUIT_QteMini", columns={"QteMini"}), @ORM\Index(name="IDX_PRODUIT_NumFournisseur", columns={"NumFournisseur"}), @ORM\Index(name="IDX_PRODUIT_TauxTVA", columns={"TauxTVA"}), @ORM\Index(name="IDX_PRODUIT_GenCode", columns={"GenCode"}), @ORM\Index(name="IDX_PRODUIT_SaisiPar", columns={"SaisiPar"}), @ORM\Index(name="IDX_PRODUIT_LibCategorie", columns={"LibCategorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var string
     *
     * @ORM\Column(name="LibProd", type="string", length=32, nullable=false)
     */
    private $libprod;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="blob", nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixHT", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $prixht;

    /**
     * @var integer
     *
     * @ORM\Column(name="QteReappro", type="integer", nullable=false)
     */
    private $qtereappro;

    /**
     * @var integer
     *
     * @ORM\Column(name="QteMini", type="integer", nullable=false)
     */
    private $qtemini;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference", type="string", length=8, nullable=false)
     */
    private $reference;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxTVA", type="float", precision=10, scale=0, nullable=false)
     */
    private $tauxtva;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PlusAuCatalogue", type="boolean", nullable=false)
     */
    private $plusaucatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="GenCode", type="string", length=15, nullable=false)
     */
    private $gencode;

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
     * @var integer
     *
     * @ORM\Column(name="IDProduit", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var \CrmBundle\Entity\Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="CrmBundle\Entity\Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NumFournisseur", referencedColumnName="NumFournisseur")
     * })
     */
    private $numfournisseur;

    /**
     * @var \CrmBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="CrmBundle\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LibCategorie", referencedColumnName="LibCategorie")
     * })
     */
    private $libcategorie;



    /**
     * Set libprod
     *
     * @param string $libprod
     * @return Produit
     */
    public function setLibprod($libprod)
    {
        $this->libprod = $libprod;
    
        return $this;
    }

    /**
     * Get libprod
     *
     * @return string 
     */
    public function getLibprod()
    {
        return $this->libprod;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Produit
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
     * Set prixht
     *
     * @param string $prixht
     * @return Produit
     */
    public function setPrixht($prixht)
    {
        $this->prixht = $prixht;
    
        return $this;
    }

    /**
     * Get prixht
     *
     * @return string 
     */
    public function getPrixht()
    {
        return $this->prixht;
    }

    /**
     * Set qtereappro
     *
     * @param integer $qtereappro
     * @return Produit
     */
    public function setQtereappro($qtereappro)
    {
        $this->qtereappro = $qtereappro;
    
        return $this;
    }

    /**
     * Get qtereappro
     *
     * @return integer 
     */
    public function getQtereappro()
    {
        return $this->qtereappro;
    }

    /**
     * Set qtemini
     *
     * @param integer $qtemini
     * @return Produit
     */
    public function setQtemini($qtemini)
    {
        $this->qtemini = $qtemini;
    
        return $this;
    }

    /**
     * Get qtemini
     *
     * @return integer 
     */
    public function getQtemini()
    {
        return $this->qtemini;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set tauxtva
     *
     * @param float $tauxtva
     * @return Produit
     */
    public function setTauxtva($tauxtva)
    {
        $this->tauxtva = $tauxtva;
    
        return $this;
    }

    /**
     * Get tauxtva
     *
     * @return float 
     */
    public function getTauxtva()
    {
        return $this->tauxtva;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
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
     * Set plusaucatalogue
     *
     * @param boolean $plusaucatalogue
     * @return Produit
     */
    public function setPlusaucatalogue($plusaucatalogue)
    {
        $this->plusaucatalogue = $plusaucatalogue;
    
        return $this;
    }

    /**
     * Get plusaucatalogue
     *
     * @return boolean 
     */
    public function getPlusaucatalogue()
    {
        return $this->plusaucatalogue;
    }

    /**
     * Set gencode
     *
     * @param string $gencode
     * @return Produit
     */
    public function setGencode($gencode)
    {
        $this->gencode = $gencode;
    
        return $this;
    }

    /**
     * Get gencode
     *
     * @return string 
     */
    public function getGencode()
    {
        return $this->gencode;
    }

    /**
     * Set saisipar
     *
     * @param string $saisipar
     * @return Produit
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
     * @return Produit
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
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set numfournisseur
     *
     * @param \CrmBundle\Entity\Fournisseur $numfournisseur
     * @return Produit
     */
    public function setNumfournisseur(\CrmBundle\Entity\Fournisseur $numfournisseur = null)
    {
        $this->numfournisseur = $numfournisseur;
    
        return $this;
    }

    /**
     * Get numfournisseur
     *
     * @return \CrmBundle\Entity\Fournisseur 
     */
    public function getNumfournisseur()
    {
        return $this->numfournisseur;
    }

    /**
     * Set libcategorie
     *
     * @param \CrmBundle\Entity\Categorie $libcategorie
     * @return Produit
     */
    public function setLibcategorie(\CrmBundle\Entity\Categorie $libcategorie = null)
    {
        $this->libcategorie = $libcategorie;
    
        return $this;
    }

    /**
     * Get libcategorie
     *
     * @return \CrmBundle\Entity\Categorie 
     */
    public function getLibcategorie()
    {
        return $this->libcategorie;
    }
}
