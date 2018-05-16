<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hashtag
 *
 * @ORM\Table(name="hashtag")
 * @ORM\Entity
 */
class Hashtag
{
    /**
     * @var string
     *
     * @ORM\Column(name="hashtag_value", type="string", length=30, nullable=false)
     */
    private $hashtagValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="hashtag_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hashtagId;



    /**
     * Set hashtagValue
     *
     * @param string $hashtagValue
     *
     * @return Hashtag
     */
    public function setHashtagValue($hashtagValue)
    {
        $this->hashtagValue = $hashtagValue;

        return $this;
    }

    /**
     * Get hashtagValue
     *
     * @return string
     */
    public function getHashtagValue()
    {
        return $this->hashtagValue;
    }

    /**
     * Get hashtagId
     *
     * @return integer
     */
    public function getHashtagId()
    {
        return $this->hashtagId;
    }
}
