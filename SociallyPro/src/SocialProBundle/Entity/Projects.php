<?php

namespace SocialProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects")
 * @ORM\Entity
 */
class Projects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="project_name", type="string", length=50, nullable=false)
     */
    private $projectName;

    /**
     * @var string
     *
     * @ORM\Column(name="project_desc", type="text", length=65535, nullable=false)
     */
    private $projectDesc;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     * })
     */
    private $manager;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    }

    /**
     * @return string
     */
    public function getProjectDesc()
    {
        return $this->projectDesc;
    }

    /**
     * @param string $projectDesc
     */
    public function setProjectDesc($projectDesc)
    {
        $this->projectDesc = $projectDesc;
    }

    /**
     * @return \Employee
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param \Employee $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    function __toString()
    {
       return $this->getProjectName();
    }


}

