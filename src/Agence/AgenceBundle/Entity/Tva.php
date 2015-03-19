<?php

namespace Agence\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tva
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Agence\AgenceBundle\Repository\TvaRepository")
 */
class Tva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Agence\AgenceBundle\Entity\Danseuses", mappedBy="tva", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $danseuse;

    /**
     * @var float
     *
     * @ORM\Column(name="multiplicate", type="float")
     */
    private $multiplicate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set multiplicate
     *
     * @param float $multiplicate
     * @return Tva
     */
    public function setMultiplicate($multiplicate)
    {
        $this->multiplicate = $multiplicate;

        return $this;
    }

    /**
     * Get multiplicate
     *
     * @return float 
     */
    public function getMultiplicate()
    {
        return $this->multiplicate;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tva
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return Tva
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->danseuse = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add danseuse
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuse
     * @return Tva
     */
    public function addDanseuse(\Agence\AgenceBundle\Entity\Danseuses $danseuse)
    {
        $this->danseuse[] = $danseuse;

        return $this;
    }

    /**
     * Remove danseuse
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuse
     */
    public function removeDanseuse(\Agence\AgenceBundle\Entity\Danseuses $danseuse)
    {
        $this->danseuse->removeElement($danseuse);
    }

    /**
     * Get danseuse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDanseuse()
    {
        return $this->danseuse;
    }

       public function __toString()
    {
        return $this->getName();
    }
}
