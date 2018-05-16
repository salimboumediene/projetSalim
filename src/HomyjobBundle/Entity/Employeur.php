<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employeur
 *
 * @ORM\Table(name="employeur", indexes={@ORM\Index(name="role_id", columns={"role_id", "region_id", "hashtag_id"}), @ORM\Index(name="role_id_2", columns={"role_id"}), @ORM\Index(name="hashtag_id", columns={"hashtag_id"}), @ORM\Index(name="region_id", columns={"region_id"})})
 * @ORM\Entity
 */
class Employeur
{
    /**
     * @var string
     *
     * @ORM\Column(name="employeur_pswd", type="string", length=255, nullable=false)
     */
    private $employeurPswd;

    /**
     * @var string
     *
     * @ORM\Column(name="employeur_mail", type="string", length=255, nullable=false)
     */
    private $employeurMail;

    /**
     * @var string
     *
     * @ORM\Column(name="employeur_descr", type="string", length=255, nullable=false)
     */
    private $employeurDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="employeur_photo", type="string", length=255, nullable=false)
     */
    private $employeurPhoto;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hashtag_id", type="integer", nullable=false)
     */
    private $hashtagId;

    /**
     * @var \HomyjobBundle\Entity\Chat
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="HomyjobBundle\Entity\Chat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employeur_id", referencedColumnName="employeur_id")
     * })
     */
    private $employeur;

    /**
    * @Assert\NotBlank()
    * @Assert\Type("\PasswordType")
    */
    private $employeurPswdConfirm;

    /**
    * @Assert\NotBlank()
    * @Assert\Type("\EmailType")
    */
    private $employeurMailConfirm;


    /**
     * Get employeurPswdConfirm
     *
     * @return string
     */
    public function getEmployeurPswdConfirm()
    {
        return $this->employeurPswdConfirm;
    }

    /**
     * Get employeurMailConfirm
     *
     * @return string
     */
    public function getEmployeurMailConfirm()
    {
        return $this->employeurMailConfirm;
    }

/**
     * Set employeurPswd
     *
     * @param string $employeurPswdConfirm
     *
     * @return Employeur
     */
    public function setEmployeurPswd($employeurPswd)
    {
        $this->employeurPswd = $employeurPswd;

        return $this;
    }

    /**
     * Set employeurPswdConfirm
     *
     * @param string $employeurPswdConfirm
     *
     * @return Employeur
     */
    public function setEmployeurPswdConfirm($employeurPswdConfirm)
    {
        $this->employeurPswdConfirm = $employeurPswdConfirm;

        return $this;
    }

    /**
     * Set employeurMailConfirm
     *
     * @param string $employeurMailConfirm
     *
     * @return Employeur
     */
    public function setEmployeurMailConfirm($employeurMailConfirm)
    {
        $this->employeurMailConfirm = $employeurMailConfirm;

        return $this;
    }

    /**
     * Get employeurPswd
     *
     * @return string
     */
    public function getEmployeurPswd()
    {
        return $this->employeurPswd;
    }

    /**
     * Set employeurMail
     *
     * @param string $employeurMail
     *
     * @return Employeur
     */
    public function setEmployeurMail($employeurMail)
    {
        $this->employeurMail = $employeurMail;

        return $this;
    }

    /**
     * Get employeurMail
     *
     * @return string
     */
    public function getEmployeurMail()
    {
        return $this->employeurMail;
    }

    /**
     * Set employeurDescr
     *
     * @param string $employeurDescr
     *
     * @return Employeur
     */
    public function setEmployeurDescr($employeurDescr)
    {
        $this->employeurDescr = $employeurDescr;

        return $this;
    }

    /**
     * Get employeurDescr
     *
     * @return string
     */
    public function getEmployeurDescr()
    {
        return $this->employeurDescr;
    }

    /**
     * Set employeurPhoto
     *
     * @param string $employeurPhoto
     *
     * @return Employeur
     */
    public function setEmployeurPhoto($employeurPhoto)
    {
        $this->employeurPhoto = $employeurPhoto;

        return $this;
    }

    /**
     * Get employeurPhoto
     *
     * @return string
     */
    public function getEmployeurPhoto()
    {
        return $this->employeurPhoto;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return Employeur
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set regionId
     *
     * @param integer $regionId
     *
     * @return Employeur
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
     * Set hashtagId
     *
     * @param integer $hashtagId
     *
     * @return Employeur
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
     * Set employeur
     *
     * @param \HomyjobBundle\Entity\Chat $employeur
     *
     * @return Employeur
     */
    public function setEmployeur(\HomyjobBundle\Entity\Chat $employeur)
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * Get employeur
     *
     * @return \HomyjobBundle\Entity\Chat
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }
}
