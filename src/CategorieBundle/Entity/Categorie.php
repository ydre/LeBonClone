<?php

namespace CategorieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Category
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="CategorieBundle\Repository\CategorieRepository")
 * @UniqueEntity(
 *     fields={"nom"},
 *     message="Catégorie deja existante"
 * )
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="OffreBundle\Entity\Offre",mappedBy="categorie")
     *
     */
    protected $offres_cate;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true, unique=true)
     */
    private $nom;


    public function __construct(){
        $this->offres_cate = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Category
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add offresCate
     *
     * @param \OffreBundle\Entity\Offre $offresCate
     *
     * @return Category
     */
    public function addOffresCate(\OffreBundle\Entity\Offre $offresCate)
    {
        $this->offres_cate[] = $offresCate;

        return $this;
    }

    /**
     * Remove offresCate
     *
     * @param \OffreBundle\Entity\Offre $offresCate
     */
    public function removeOffresCate(\OffreBundle\Entity\Offre $offresCate)
    {
        $this->offres_cate->removeElement($offresCate);
    }

    /**
     * Get offresCate
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffresCate()
    {
        return $this->offres_cate;
    }

    public function __toString(){
        return $this->nom;
    }
}
