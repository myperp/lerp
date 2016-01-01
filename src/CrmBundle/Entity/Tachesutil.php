<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tachesutil
 *
 * @ORM\Table(name="tachesutil", indexes={@ORM\Index(name="IDX_TachesUtil_DateTache", columns={"DateTache"}), @ORM\Index(name="IDX_TachesUtil_HeureTache", columns={"HeureTache"})})
 * @ORM\Entity
 */
class Tachesutil
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTache", type="date", nullable=false)
     */
    private $datetache;

    /**
     * @var integer
     *
     * @ORM\Column(name="HeureTache", type="integer", nullable=false)
     */
    private $heuretache;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleTache", type="string", length=50, nullable=false)
     */
    private $libelletache;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDTachesUtil", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtachesutil;



    /**
     * Set datetache
     *
     * @param \DateTime $datetache
     * @return Tachesutil
     */
    public function setDatetache($datetache)
    {
        $this->datetache = $datetache;
    
        return $this;
    }

    /**
     * Get datetache
     *
     * @return \DateTime 
     */
    public function getDatetache()
    {
        return $this->datetache;
    }

    /**
     * Set heuretache
     *
     * @param integer $heuretache
     * @return Tachesutil
     */
    public function setHeuretache($heuretache)
    {
        $this->heuretache = $heuretache;
    
        return $this;
    }

    /**
     * Get heuretache
     *
     * @return integer 
     */
    public function getHeuretache()
    {
        return $this->heuretache;
    }

    /**
     * Set libelletache
     *
     * @param string $libelletache
     * @return Tachesutil
     */
    public function setLibelletache($libelletache)
    {
        $this->libelletache = $libelletache;
    
        return $this;
    }

    /**
     * Get libelletache
     *
     * @return string 
     */
    public function getLibelletache()
    {
        return $this->libelletache;
    }

    /**
     * Get idtachesutil
     *
     * @return integer 
     */
    public function getIdtachesutil()
    {
        return $this->idtachesutil;
    }
}
