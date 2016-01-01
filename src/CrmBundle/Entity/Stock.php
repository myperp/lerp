<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", uniqueConstraints={@ORM\UniqueConstraint(name="Reference", columns={"Reference"})}, indexes={@ORM\Index(name="IDX_STOCK_AuteurModif", columns={"AuteurModif"})})
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="QteEnStock", type="integer", nullable=false)
     */
    private $qteenstock;

    /**
     * @var string
     *
     * @ORM\Column(name="AuteurModif", type="string", length=20, nullable=false)
     */
    private $auteurmodif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModif", type="date", nullable=false)
     */
    private $datemodif;

    /**
     * @var integer
     *
     * @ORM\Column(name="QteStockVirtuel", type="integer", nullable=false)
     */
    private $qtestockvirtuel;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDStock", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstock;

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
     * Set qteenstock
     *
     * @param integer $qteenstock
     * @return Stock
     */
    public function setQteenstock($qteenstock)
    {
        $this->qteenstock = $qteenstock;
    
        return $this;
    }

    /**
     * Get qteenstock
     *
     * @return integer 
     */
    public function getQteenstock()
    {
        return $this->qteenstock;
    }

    /**
     * Set auteurmodif
     *
     * @param string $auteurmodif
     * @return Stock
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
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return Stock
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
     * Set qtestockvirtuel
     *
     * @param integer $qtestockvirtuel
     * @return Stock
     */
    public function setQtestockvirtuel($qtestockvirtuel)
    {
        $this->qtestockvirtuel = $qtestockvirtuel;
    
        return $this;
    }

    /**
     * Get qtestockvirtuel
     *
     * @return integer 
     */
    public function getQtestockvirtuel()
    {
        return $this->qtestockvirtuel;
    }

    /**
     * Get idstock
     *
     * @return integer 
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set reference
     *
     * @param \CrmBundle\Entity\Produit $reference
     * @return Stock
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
