<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="logs")
 * @ORM\Entity
 */
class Logs
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_log", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateLog;

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip;



    /**
     * Set dateLog
     *
     * @param \DateTime $dateLog
     *
     * @return Logs
     */
    public function setDateLog($dateLog)
    {
        $this->dateLog = $dateLog;

        return $this;
    }

    /**
     * Get dateLog
     *
     * @return \DateTime
     */
    public function getDateLog()
    {
        return $this->dateLog;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Logs
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
