<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codepostaux
 *
 * @ORM\Table(name="codepostaux", indexes={@ORM\Index(name="IDX_CODEPOSTAUX_Ville", columns={"Ville"}), @ORM\Index(name="IDX_CODEPOSTAUX_CodePostal", columns={"CodePostal"})})
 * @ORM\Entity
 */
class Codepostaux
{
    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=5, nullable=false)
     */
    private $codepostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCedex", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcedex;



    /**
     * Set ville
     *
     * @param string $ville
     * @return Codepostaux
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
     * Set codepostal
     *
     * @param string $codepostal
     * @return Codepostaux
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
     * Get idcedex
     *
     * @return integer 
     */
    public function getIdcedex()
    {
        return $this->idcedex;
    }
}
