<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileRecherche
 *
 * @ORM\Table(name="profile_recherche", indexes={@ORM\Index(name="region_id", columns={"region_id"}), @ORM\Index(name="hashtag_id", columns={"hashtag_id"})})
 * @ORM\Entity
 */
class ProfileRecherche
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hashtag_id", type="integer", nullable=false)
     */
    private $hashtagId;

    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="profile_recherche_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileRechercheId;



    /**
     * Set hashtagId
     *
     * @param integer $hashtagId
     *
     * @return ProfileRecherche
     */
    public function setHashtagId($hashtagId)
    {
        $this->hashtagId = $hashtagId;

        return $this;
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

    /**
     * Set regionId
     *
     * @param integer $regionId
     *
     * @return ProfileRecherche
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
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

    /**
     * Get profileRechercheId
     *
     * @return integer
     */
    public function getProfileRechercheId()
    {
        return $this->profileRechercheId;
    }
}
