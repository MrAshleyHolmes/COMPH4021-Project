<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 21/04/2017
 * Time: 13:21
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cover_page")
 */
class CoverPage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @Assert\NotBlank(message="You need to select a year")
     * @ORM\Column(type="boolean")
     */
    private $year;

    /**
     * @Assert\NotBlank(message="You need to select a semester")
     * @ORM\Column(type="boolean")
     */
    private $semester;

    /**
     * @Assert\NotBlank(message="You need to select a date")
     * @ORM\Column(type="date")
     */
    private $dateExamination;

    /**
     * @ORM\Column(type="time")
     */
    private $timeExamination;

    /**
     * @Assert\NotBlank(message="A program code must be selected")
     * @ORM\Column(type="string")
     */
    private $progCode;

    /**
     * @Assert\NotBlank(message="A program title must be selected")
     * @ORM\Column(type="string")
     */
    private $progTitle;

    /**
     * @Assert\NotBlank(message="A module code must be selected")
     * @ORM\Column(type="string")
     */
    private $modCode;

    /**
     * @Assert\NotBlank(message="A module title must be selected")
     * @ORM\Column(type="string")
     */
    private $modTitle;

    /**
     * @Assert\NotBlank(message="You need to select an external examiner")
     * @ORM\Column(type="string")
     */
    private $internalExaminer;

    /**
     * @Assert\NotBlank(message="You need to select an external examiner")
     * @ORM\Column(type="string")
     */
    private $externalExaminer;

    /**
     * @Assert\NotBlank(message="Instructions need to be given")
     * @ORM\Column(type="string")
     */
    private $examinerInstructions;

    /**
     * @ORM\Column(type="string")
     */
    private $firstInstruction;

    /**
     * @ORM\Column(type="string")
     */
    private $secondInstruction;

    /**
     * @ORM\Column(type="string")
     */
    private $thirdInstruction;

    /**
     * @ORM\Column(type="string")
     */
    private $fourthInstruction;

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * @param mixed $semester
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    /**
     * @return mixed
     */
    public function getDateExamination()
    {
        return $this->dateExamination;
    }

    /**
     * @param mixed $dateExamination
     */
    public function setDateExamination($dateExamination)
    {
        $this->dateExamination = $dateExamination;
    }

    /**
     * @return mixed
     */
    public function getTimeExamination()
    {
        return $this->timeExamination;
    }

    /**
     * @param mixed $timeExamination
     */
    public function setTimeExamination($timeExamination)
    {
        $this->timeExamination = $timeExamination;
    }

    /**
     * @return mixed
     */
    public function getProgCode()
    {
        return $this->progCode;
    }

    /**
     * @param mixed $progCode
     */
    public function setProgCode($progCode)
    {
        $this->progCode = $progCode;
    }

    /**
     * @return mixed
     */
    public function getProgTitle()
    {
        return $this->progTitle;
    }

    /**
     * @param mixed $progTitle
     */
    public function setProgTitle($progTitle)
    {
        $this->progTitle = $progTitle;
    }

    /**
     * @return mixed
     */
    public function getModCode()
    {
        return $this->modCode;
    }

    /**
     * @param mixed $modCode
     */
    public function setModCode($modCode)
    {
        $this->modCode = $modCode;
    }

    /**
     * @return mixed
     */
    public function getModTitle()
    {
        return $this->modTitle;
    }

    /**
     * @param mixed $modTitle
     */
    public function setModTitle($modTitle)
    {
        $this->modTitle = $modTitle;
    }

    /**
     * @return mixed
     */
    public function getInternalExaminer()
    {
        return $this->internalExaminer;
    }

    /**
     * @param mixed $internalExaminer
     */
    public function setInternalExaminer($internalExaminer)
    {
        $this->internalExaminer = $internalExaminer;
    }

    /**
     * @return mixed
     */
    public function getExternalExaminer()
    {
        return $this->externalExaminer;
    }

    /**
     * @param mixed $externalExaminer
     */
    public function setExternalExaminer($externalExaminer)
    {
        $this->externalExaminer = $externalExaminer;
    }

    /**
     * @return mixed
     */
    public function getExaminerInstructions()
    {
        return $this->examinerInstructions;
    }

    /**
     * @param mixed $examinerInstructions
     */
    public function setExaminerInstructions($examinerInstructions)
    {
        $this->examinerInstructions = $examinerInstructions;
    }

    /**
     * @return mixed
     */
    public function getFirstInstruction()
    {
        return $this->firstInstruction;
    }

    /**
     * @param mixed $firstInstruction
     */
    public function setFirstInstruction($firstInstruction)
    {
        $this->firstInstruction = $firstInstruction;
    }

    /**
     * @return mixed
     */
    public function getSecondInstruction()
    {
        return $this->secondInstruction;
    }

    /**
     * @param mixed $secondInstruction
     */
    public function setSecondInstruction($secondInstruction)
    {
        $this->secondInstruction = $secondInstruction;
    }

    /**
     * @return mixed
     */
    public function getThirdInstruction()
    {
        return $this->thirdInstruction;
    }

    /**
     * @param mixed $thirdInstruction
     */
    public function setThirdInstruction($thirdInstruction)
    {
        $this->thirdInstruction = $thirdInstruction;
    }

    /**
     * @return mixed
     */
    public function getFourthInstruction()
    {
        return $this->fourthInstruction;
    }

    /**
     * @param mixed $fourthInstruction
     */
    public function setFourthInstruction($fourthInstruction)
    {
        $this->fourthInstruction = $fourthInstruction;
    }
}
