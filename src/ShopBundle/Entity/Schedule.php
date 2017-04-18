<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\ScheduleRepository")
 */
class Schedule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="beginhour", type="string", length=255)
     */
    protected $beginhour;

    /**
     * @var string
     *
     * @ORM\Column(name="endhour", type="string", length=255)
     */
    protected $endhour;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set beginhour
     *
     * @param string $beginhour
     *
     * @return Schedule
     */
    public function setBeginhour($beginhour)
    {
        $this->beginhour = $beginhour;

        return $this;
    }

    /**
     * Get beginhour
     *
     * @return string
     */
    public function getBeginhour()
    {
        return $this->beginhour;
    }

    /**
     * Set endhour
     *
     * @param string $endhour
     *
     * @return Schedule
     */
    public function setEndhour($endhour)
    {
        $this->endhour = $endhour;

        return $this;
    }

    /**
     * Get endhour
     *
     * @return string
     */
    public function getEndhour()
    {
        return $this->endhour;
    }
}

