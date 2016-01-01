<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique", indexes={@ORM\Index(name="IDX_HISTORIQUE_NumCommande", columns={"NumCommande"}), @ORM\Index(name="IDX_HISTORIQUE_EtatLivraison", columns={"EtatLivraison"}), @ORM\Index(name="IDX_HISTORIQUE_DateHeure", columns={"DateHeure"}), @ORM\Index(name="IDX_HISTORIQUE_TypeHistorique", columns={"TypeHistorique"}), @ORM\Index(name="IDX_HISTORIQUE_IDLigneCde", columns={"IDLigneCde"}), @ORM\Index(name="IDX_HISTORIQUE_NumCommandeDateHeure", columns={"NumCommande", "DateHeure"}), @ORM\Index(name="IDX_HISTORIQUE_DateHeureIDLigneCde", columns={"IDLigneCde", "DateHeure"}), @ORM\Index(name="IDX_HISTORIQUE_NumCde_EtatLivraison", columns={"NumCommande", "EtatLivraison"})})
 * @ORM\Entity
 */
class Historique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="EtatLivraison", type="integer", nullable=false)
     */
    private $etatlivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHeure", type="datetime", nullable=false)
     */
    private $dateheure;

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeHistorique", type="integer", nullable=false)
     */
    private $typehistorique;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDLigneCde", type="bigint", nullable=false)
     */
    private $idlignecde;

    /**
     * @var string
     *
     * @ORM\Column(name="CheminSignature", type="string", length=255, nullable=false)
     */
    private $cheminsignature;

    /**
     * @var string
     *
     * @ORM\Column(name="Receptionniste", type="string", length=100, nullable=false)
     */
    private $receptionniste;

    /**
     * @var string
     *
     * @ORM\Column(name="NumLivraison", type="string", length=20, nullable=false)
     */
    private $numlivraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDHISTORIQUE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistorique;

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
     * Set etatlivraison
     *
     * @param integer $etatlivraison
     * @return Historique
     */
    public function setEtatlivraison($etatlivraison)
    {
        $this->etatlivraison = $etatlivraison;
    
        return $this;
    }

    /**
     * Get etatlivraison
     *
     * @return integer 
     */
    public function getEtatlivraison()
    {
        return $this->etatlivraison;
    }

    /**
     * Set dateheure
     *
     * @param \DateTime $dateheure
     * @return Historique
     */
    public function setDateheure($dateheure)
    {
        $this->dateheure = $dateheure;
    
        return $this;
    }

    /**
     * Get dateheure
     *
     * @return \DateTime 
     */
    public function getDateheure()
    {
        return $this->dateheure;
    }

    /**
     * Set typehistorique
     *
     * @param integer $typehistorique
     * @return Historique
     */
    public function setTypehistorique($typehistorique)
    {
        $this->typehistorique = $typehistorique;
    
        return $this;
    }

    /**
     * Get typehistorique
     *
     * @return integer 
     */
    public function getTypehistorique()
    {
        return $this->typehistorique;
    }

    /**
     * Set idlignecde
     *
     * @param integer $idlignecde
     * @return Historique
     */
    public function setIdlignecde($idlignecde)
    {
        $this->idlignecde = $idlignecde;
    
        return $this;
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
     * Set cheminsignature
     *
     * @param string $cheminsignature
     * @return Historique
     */
    public function setCheminsignature($cheminsignature)
    {
        $this->cheminsignature = $cheminsignature;
    
        return $this;
    }

    /**
     * Get cheminsignature
     *
     * @return string 
     */
    public function getCheminsignature()
    {
        return $this->cheminsignature;
    }

    /**
     * Set receptionniste
     *
     * @param string $receptionniste
     * @return Historique
     */
    public function setReceptionniste($receptionniste)
    {
        $this->receptionniste = $receptionniste;
    
        return $this;
    }

    /**
     * Get receptionniste
     *
     * @return string 
     */
    public function getReceptionniste()
    {
        return $this->receptionniste;
    }

    /**
     * Set numlivraison
     *
     * @param string $numlivraison
     * @return Historique
     */
    public function setNumlivraison($numlivraison)
    {
        $this->numlivraison = $numlivraison;
    
        return $this;
    }

    /**
     * Get numlivraison
     *
     * @return string 
     */
    public function getNumlivraison()
    {
        return $this->numlivraison;
    }

    /**
     * Get idhistorique
     *
     * @return integer 
     */
    public function getIdhistorique()
    {
        return $this->idhistorique;
    }

    /**
     * Set numcommande
     *
     * @param \CrmBundle\Entity\Commande $numcommande
     * @return Historique
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
}
