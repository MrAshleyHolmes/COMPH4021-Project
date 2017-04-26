<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 24/04/2017
 * Time: 15:23
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Question number needs to be provided")
     * @ORM\Column(type="string")
     */
    private $questionNumber;

    /**
     * @Assert\NotBlank(message="Question type needs to be provided")
     * @ORM\Column(type="string")
     */
    private $questionType;

    /**
     * @Assert\NotBlank(message="Sub-Question needs to be provided")
     * @ORM\Column(type="string")
     */
    private $subQuestion;

    /**
     * @Assert\NotBlank(message="Total of marks need to be allocated")
     * @ORM\Column(type="string")
     */
    private $totalMarks;

    /**
     * @return mixed
     */
    public function getQuestionNumber()
    {
        return $this->questionNumber;
    }

    /**
     * @param mixed $questionNumber
     */
    public function setQuestionNumber($questionNumber)
    {
        $this->questionNumber = $questionNumber;
    }

    /**
     * @return mixed
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * @param mixed $questionType
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;
    }

    /**
     * @return mixed
     */
    public function getSubQuestion()
    {
        return $this->subQuestion;
    }

    /**
     * @param mixed $subQuestion
     */
    public function setSubQuestion($subQuestion)
    {
        $this->subQuestion = $subQuestion;
    }

    /**
     * @return mixed
     */
    public function getTotalMarks()
    {
        return $this->totalMarks;
    }

    /**
     * @param mixed $totalMarks
     */
    public function setTotalMarks($totalMarks)
    {
        $this->totalMarks = $totalMarks;
    }
}