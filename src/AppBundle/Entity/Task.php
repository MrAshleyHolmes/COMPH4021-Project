<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 25/04/2017
 * Time: 00:27
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Tag", mappedBy="task")
     * @ORM\Column(type="string")
     */
    protected $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Tag $tag
     * @return ArrayCollection
     */
    public function addTag(Tag $tag)
    {
        if (!$this->tags->contains($tag)) {
            $this->tags->add($tag);
        }
        return $this->tags;
    }

    /**
     * @param Tag $tag
     * @return ArrayCollection
     */
    public function removeTag(Tag $tag)
    {
        if (!$this->tags->contains($tag)) {
            $this->tags->remove($tag);
        }
        return $this->tags;
    }

    /**
     * @param Collection $tags
     */
    public function setTags(Collection $tags)
    {
        $this->tags = $tags;
    }
}
