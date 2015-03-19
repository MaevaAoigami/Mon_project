<?php

namespace Agence\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;

/**
 * MediaEvent
 *
 * @ORM\Table("MediaEvent")
 * @ORM\Entity(repositoryClass="Agence\AgenceBundle\Repository\MediaEventRepository")
 * @ORM\HasLifecycleCallbacks
 */
class MediaEvent
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
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updateAt = new \DateTime();
    }
    
    /**
     * @ORM\Column(type="string",length=255) 
     * @Assert\NotBlank
     */
    private $name;
    
    /**
     * @ORM\Column(type="string",length=255, nullable=true) 
     */
    private $path;
    
    public $file;
    
    public function getUploadRootDir()
    {
        return __dir__.'/../../../../web/uploads';
    }
    
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
    
    public function getAssetPath()
    {
        return 'uploads/'.$this->path;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate() 
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->updateAt = new \DateTime();
        
        if (null !== $this->file) 
            $this->path = sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate() 
     */
    public function upload()
    {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(),$this->path);
            unset($this->file);
            
            if ($this->oldFile != null) unlink($this->tempFile);
        }
    }
    
    /**
     * @ORM\PreRemove() 
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }
    
    /**
     * @ORM\PostRemove() 
     */
    public function removeUpload()
    {
        if (file_exists($this->tempFile)) unlink($this->tempFile);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getPath()
    {
        return $this->path;
    }
    
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MediaEvent
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return MediaEvent
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }
}