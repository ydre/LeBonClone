<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use UserBundle\Entity\User;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="OffreBundle\Repository\OffreRepository")
 */
class Offre
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
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="offres")
     * @ORM\JoinColumn(name="user_id" ,referencedColumnName = "id", onDelete = "SET NULL")
     *
     */
    protected $user;


    /**
     * @ORM\ManyToOne(targetEntity="CategorieBundle\Entity\Categorie", inversedBy="offres_cate")
     * @ORM\JoinColumn(name="cate_id" ,referencedColumnName = "id", onDelete = "SET NULL")
     *
     */
    protected $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Offre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Offre
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
     * Set prix
     *
     * @param integer $prix
     *
     * @return Offre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Offre
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param \CategorieBundle\Entity\Categorie $category
     *
     * @return Offre
     */
    public function setCategorie(\CategorieBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get category
     *
     * @return \CategorieBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
