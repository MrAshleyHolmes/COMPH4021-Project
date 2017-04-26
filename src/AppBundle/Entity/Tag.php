<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 25/04/2017
 * Time: 00:30
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tag")
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Task", inversedBy="tags")
     * @ORM\JoinColumn(name="name_id", referencedColumnName="id")
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
/*    private $task;

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }*/

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
/*    public function getTask()
    {
        return $this->task;
    }*/

    /**
     * @param Task $task
     * @return ArrayCollection
     */
/*    public function addTag(Task $task)
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
        }
        return $this->tasks;
    }*/

    /**
     * @param Task $task
     * @return ArrayCollection
     */
/*    public function removeTag(Task $task)
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks->remove($task);
        }
        return $this->tasks;
    }*/

    /**
     * @param mixed $task
     */
/*    public function setTask($task)
    {
        $this->task = $task;
    }*/
}
