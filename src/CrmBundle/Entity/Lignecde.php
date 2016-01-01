<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecde
 *
 * @ORM\Table(name="lignecde", indexes={@ORM\Index(name="IDX_LIGNECDE_Quantite", columns={"Quantite"}), @ORM\Index(name="IDX_LIGNECDE_Reference", columns={"Reference"}), @ORM\Index(name="IDX_LIGNECDE_NumCommande", columns={"NumCommande"}), @ORM\Index(name="IDX_LIGNECDE_TauxTVA", columns={"TauxTVA"}), @ORM\Index(name="IDX_LIGNECDE_LibProd", columns={"LibProd"}), @ORM\Index(name="IDX_LIGNECDE_OptimCleComp_1", columns={"NumCommande", "Quantite"}), @ORM\Index(name="IDX_LIGNECDE_OptimCleComp_2", columns={"Reference", "NumCommande"})})
 * @ORM\Entity
 */
class Lignecde
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="bigint", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="Remise", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $remise;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxTVA", type="float", precision=10, scale=0, nullable=false)
     */
    private $tauxtva;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixVente", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $prixvente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Livre", type="boolean", nullable=false)
     */
    private $livre;

    /**
     * @var string
     *
     * @ORM\Column(name="LibProd", type="string", length=32, nullable=false)
     */
    private $libprod;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDLigneCde", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlignecde;

    /**
     * @var \CrmBundle\Entity\Commande
     *
     * @ORM\ManyToOne(targetEntity="CrmBundle\Entity\Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NumCommande", referencedColumnName="NumCommande")
     * })
     */
    private $numcommande;

    /**
     * @var \CrmBundle\Entity\Produit
     *
     * @ORM\ManyToOne(targetEntity="CrmBundle\Entity\Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Reference", referencedColumnName="Reference")
     * })
     */
    private $reference;



    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignecde
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set remise
     *
     * @param string $remise
     * @return Lignecde
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;
    
        return $this;
    }

    /**
     * Get remise
     *
     * @return string 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set tauxtva
     *
     * @param float $tauxtva
     * @return Lignecde
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
     * Set prixvente
     *
     * @param string $prixvente
     * @return Lignecde
     */
    public function setPrixvente($prixvente)
    {
        $this->prixvente = $prixvente;
    
        return $this;
    }

    /**
     * Get prixvente
     *
     * @return string 
     */
    public function getPrixvente()
    {
        return $this->prixvente;
    }

    /**
     * Set livre
     *
     * @param boolean $livre
     * @return Lignecde
     */
    public function setLivre($livre)
    {
        $this->livre = $livre;
    
        return $this;
    }

    /**
     * Get livre
     *
     * @return boolean 
     */
    public function getLivre()
    {
        return $this->livre;
    }

    /**
     * Set libprod
     *
     * @param string $libprod
     * @return Lignecde
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
     * Get idlignecde
     *
     * @return integer 
     */
    public function getIdlignecde()
    {
        return $this->idlignecde;
    }

    /**
     * Set numcommande
     *
     * @param \CrmBundle\Entity\Commande $numcommande
     * @return Lignecde
     */
    public function setNumcommande(\CrmBundle\Entity\Commande $numcommande = null)
    {
        $this->numcommande = $numcommande;
    
        return $this;
    }

    /**
     * Get numcommande
     *
     * @return \CrmBundle\Entity\Commande 
     */
    public function getNumcommande()
    {
        return $this->numcommande;
    }

    /**
     * Set reference
     *
     * @param \CrmBundle\Entity\Produit $reference
     * @return Lignecde
     */
    public function setReference(\CrmBundle\Entity\Produit $reference = null)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return \CrmBundle\Entity\Produit 
     */
    public function getReference()
    {
        return $this->reference;
    }
}
