<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name=" lbc_user")
 * 
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="OffreBundle\Entity\Offre", mappedBy="user")
     *
     */
    protected $offres;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
        $this->offres = new ArrayCollection();
        // your own logic
    }

    /**
     * Add offre
     *
     * @param \OffreBundle\Entity\Offre $offre
     *
     * @return User
     */
    public function addOffre(\OffreBundle\Entity\Offre $offre)
    {
        $this->offres[] = $offre;

        return $this;
    }

    /**
     * Remove offre
     *
     * @param \OffreBundle\Entity\Offre $offre
     */
    public function removeOffre(\OffreBundle\Entity\Offre $offre)
    {
        $this->offres->removeElement($offre);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffres()
    {
        return $this->offres;
    }
}
