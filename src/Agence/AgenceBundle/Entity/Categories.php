<?php

namespace Agence\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Agence\AgenceBundle\Repository\CategoriesRepository")
 */
class Categories
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
     * @ORM\OneToMany(targetEntity="Agence\AgenceBundle\Entity\Danseuses", mappedBy="categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $danseuse;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Categories
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
     * @return Categories
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
