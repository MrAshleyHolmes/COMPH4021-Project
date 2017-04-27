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
     * His name is my question
     *
     * @ORM\Column(type="string")
     */
    protected $question;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Tag", mappedBy="task", cascade={"persist"})
     */
    private $tags;

    /**
     * Task constructor.
     */
    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param $question
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
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
            $tag->setTask($this);
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
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }

        return $this->tags;
    }

    /**
     * @param Collection $tags
     * @return $this
     */
    public function setTags(Collection $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}