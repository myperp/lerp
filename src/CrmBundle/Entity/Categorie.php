<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="LibCategorie", columns={"LibCategorie"})}, indexes={@ORM\Index(name="IDX_CATEGORIE_LibCategorieParent", columns={"LibCategorieParent"})})
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="LibCategorie", type="string", length=30, nullable=false)
     */
    private $libcategorie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SousCategorie", type="boolean", nullable=false)
     */
    private $souscategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="LibCategorieParent", type="string", length=30, nullable=false)
     */
    private $libcategorieparent;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCategorie", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;



    /**
     * Set libcategorie
     *
     * @param string $libcategorie
     * @return Categorie
     */
    public function setLibcategorie($libcategorie)
    {
        $this->libcategorie = $libcategorie;
    
        return $this;
    }

    /**
     * Get libcategorie
     *
     * @return string 
     */
    public function getLibcategorie()
    {
        return $this->libcategorie;
    }

    /**
     * Set souscategorie
     *
     * @param boolean $souscategorie
     * @return Categorie
     */
    public function setSouscategorie($souscategorie)
    {
        $this->souscategorie = $souscategorie;
    
        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return boolean 
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set libcategorieparent
     *
     * @param string $libcategorieparent
     * @return Categorie
     */
    public function setLibcategorieparent($libcategorieparent)
    {
        $this->libcategorieparent = $libcategorieparent;
    
        return $this;
    }

    /**
     * Get libcategorieparent
     *
     * @return string 
     */
    public function getLibcategorieparent()
    {
        return $this->libcategorieparent;
    }

    /**
     * Get idcategorie
     *
     * @return integer 
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }
}
