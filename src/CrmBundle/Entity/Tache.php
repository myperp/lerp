<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table(name="tache", indexes={@ORM\Index(name="IDX_TACHE_Duree", columns={"Duree"}), @ORM\Index(name="IDX_TACHE_DateLimite", columns={"DateLimite"}), @ORM\Index(name="IDX_TACHE_NomPrenom", columns={"NomPrenom"})})
 * @ORM\Entity
 */
class Tache
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateLimite", type="date", nullable=false)
     */
    private $datelimite;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreTache", type="string", length=50, nullable=false)
     */
    private $titretache;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDTache", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtache;

    /**
     * @var \CrmBundle\Entity\Collaborateur
     *
     * @ORM\ManyToOne(targetEntity="CrmBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NomPrenom", referencedColumnName="NomPrenom")
     * })
     */
    private $nomprenom;



    /**
     * Set duree
     *
     * @param integer $duree
     * @return Tache
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Tache
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
     * Set datelimite
     *
     * @param \DateTime $datelimite
     * @return Tache
     */
    public function setDatelimite($datelimite)
    {
        $this->datelimite = $datelimite;
    
        return $this;
    }

    /**
     * Get datelimite
     *
     * @return \DateTime 
     */
    public function getDatelimite()
    {
        return $this->datelimite;
    }

    /**
     * Set titretache
     *
     * @param string $titretache
     * @return Tache
     */
    public function setTitretache($titretache)
    {
        $this->titretache = $titretache;
    
        return $this;
    }

    /**
     * Get titretache
     *
     * @return string 
     */
    public function getTitretache()
    {
        return $this->titretache;
    }

    /**
     * Get idtache
     *
     * @return integer 
     */
    public function getIdtache()
    {
        return $this->idtache;
    }

    /**
     * Set nomprenom
     *
     * @param \CrmBundle\Entity\Collaborateur $nomprenom
     * @return Tache
     */
    public function setNomprenom(\CrmBundle\Entity\Collaborateur $nomprenom = null)
    {
        $this->nomprenom = $nomprenom;
    
        return $this;
    }

    /**
     * Get nomprenom
     *
     * @return \CrmBundle\Entity\Collaborateur 
     */
    public function getNomprenom()
    {
        return $this->nomprenom;
    }
}
