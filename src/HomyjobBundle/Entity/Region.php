<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="region_value", type="string", length=255, nullable=false)
     */
    private $regionValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regionId;



    /**
     * Set regionValue
     *
     * @param string $regionValue
     *
     * @return Region
     */
    public function setRegionValue($regionValue)
    {
        $this->regionValue = $regionValue;

        return $this;
    }

    /**
     * Get regionValue
     *
     * @return string
     */
    public function getRegionValue()
    {
        return $this->regionValue;
    }

    /**
     * Get regionId
     *
     * @return integer
     */
    public function getRegionId()
    {
        return $this->regionId;
    }
}
