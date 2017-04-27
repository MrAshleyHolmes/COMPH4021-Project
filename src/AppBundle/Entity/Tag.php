<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 25/04/2017
 * Time: 00:30
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="tag")
 * @ORM\HasLifecycleCallbacks()
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
     *
     * @ORM\Column(type="string")
     */
    protected $part;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Task", inversedBy="tags")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    protected $task;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * Task constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * @param $part
     * @return $this
     */
    public function setPart($part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * @param Task $task
     */
    public function addTask(Task $task)
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
        }
    }

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param Task $task
     * @return $this
     */
    public function setTask(Task $task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAt()
    {
        $this->updatedAt = new \DateTime();
    }
}