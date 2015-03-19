<?php

namespace Agence\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenements
 *
 * @ORM\Table("evenements")
 * @ORM\Entity(repositoryClass="Agence\AgenceBundle\Repository\EvenementsRepository")
 */
class Evenements
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
     * @ORM\OneToOne(targetEntity="Agence\AgenceBundle\Entity\MediaEvent", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
   * @ORM\ManyToMany(targetEntity="Agence\AgenceBundle\Entity\Danseuses", cascade={"persist"})
   */
    private $danseuses;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Location", type="string", length=255)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHour", type="datetime", nullable=true)
    */
    private $dateHour;

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
     * @return Evenements
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
     * Set location
     *
     * @param string $location
     * @return Evenements
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->danseuses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add danseuses
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuses
     * @return Evenements
     */
    public function addDanseus(\Agence\AgenceBundle\Entity\Danseuses $danseuses)
    {
        $this->danseuses[] = $danseuses;

        return $this;
    }

    /**
     * Remove danseuses
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuses
     */
    public function removeDanseus(\Agence\AgenceBundle\Entity\Danseuses $danseuses)
    {
        $this->danseuses->removeElement($danseuses);
    }

    /**
     * Get danseuses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDanseuses()
    {
        return $this->danseuses;
    }

    /**
     * Set dateHour
     *
     * @param \DateTime $dateHour
     * @return Evenements
     */
    public function setDateHour($dateHour)
    {
        $this->dateHour = $dateHour;

        return $this;
    }

    /**
     * Get dateHour
     *
     * @return \DateTime 
     */
    public function getDateHour()
    {
        return $this->dateHour;
    }

    /**
     * Set image
     *
     * @param \Agence\AgenceBundle\Entity\MediaEvent $image
     * @return Evenements
     */
    public function setImage(\Agence\AgenceBundle\Entity\MediaEvent $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Agence\AgenceBundle\Entity\MediaEvent 
     */
    public function getImage()
    {
        return $this->image;
    }
}
