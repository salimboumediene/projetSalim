<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Apprenti
 *
 * @ORM\Table(name="apprenti", indexes={@ORM\Index(name="role_id", columns={"role_id", "region_id", "hashtag_id"}), @ORM\Index(name="hashtag_id", columns={"hashtag_id"}), @ORM\Index(name="region_id", columns={"region_id"}), @ORM\Index(name="role_id_2", columns={"role_id"})})
 * @ORM\Entity
 */
class Apprenti
{
    /**
     * @var string
     *
     * @ORM\Column(name="apprenti_pswd", type="string", length=255, nullable=false)
     */
    private $apprentiPswd;

    /**
     * @var string
     *
     * @ORM\Column(name="apprenti_mail", type="string", length=255, nullable=false)
     */
    private $apprentiMail;

    /**
     * @var string
     *
     * @ORM\Column(name="apprenti_descr", type="string", length=255, nullable=false)
     */
    private $apprentiDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="apprenti_photo", type="string", length=255, nullable=false)
     */
    private $apprentiPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="apprenti_nom", type="string", length=255, nullable=false)
     */
    private $apprentiNom;

    /**
     * @var string
     *
     * @ORM\Column(name="apprenti_prenom", type="string", length=255, nullable=false)
     */
    private $apprentiPrenom;

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
     *   @ORM\JoinColumn(name="apprenti_id", referencedColumnName="apprenti_id")
     * })
     */
    private $apprenti;

    /**
    * @Assert\NotBlank()
    * @Assert\Type("\PasswordType")
    */
    private $apprentiPswdConfirm;

    /**
    * @Assert\NotBlank()
    * @Assert\Type("\EmailType")
    */
    private $apprentiMailConfirm;



    /**
     * Set apprentiPswd
     *
     * @param string $apprentiPswd
     *
     * @return Apprenti
     */
    public function setApprentiPswd($apprentiPswd)
    {
        $this->apprentiPswd = $apprentiPswd;

        return $this;
    }

    /**
     * Set apprentiPswdConfirm
     *
     * @param string $apprentiPswdConfirm
     *
     * @return Apprenti
     */
    public function setApprentiPswdConfirm($apprentiPswdConfirm)
    {
        $this->apprentiPswdConfirm = $apprentiPswdConfirmapprentiPswd;

        return $this;
    }

    /**
     * Get apprentiPswdConfirm
     *
     * @return string
     */
    public function getapprentiPswdConfirm()
    {
        return $this->apprentiPswdConfirm;
    }

    /**
     * Set apprentiMailConfirm
     *
     * @param string $apprentiMailConfirm
     *
     * @return Apprenti
     */
    public function setApprentiMailConfirm($apprentiMailConfirm)
    {
        $this->apprentiMailConfirm = $apprentiMailConfirm;

        return $this;
    }

    /**
     * Get apprentiMailConfirm
     *
     * @return string
     */
    public function getapprentiMailConfirm()
    {
        return $this->apprentiMailConfirm;
    }

    /**
     * Get apprentiPswd
     *
     * @return string
     */
    public function getApprentiPswd()
    {
        return $this->apprentiPswd;
    }

    /**
     * Set apprentiMail
     *
     * @param string $apprentiMail
     *
     * @return Apprenti
     */
    public function setApprentiMail($apprentiMail)
    {
        $this->apprentiMail = $apprentiMail;

        return $this;
    }

    /**
     * Get apprentiMail
     *
     * @return string
     */
    public function getApprentiMail()
    {
        return $this->apprentiMail;
    }

    /**
     * Set apprentiDescr
     *
     * @param string $apprentiDescr
     *
     * @return Apprenti
     */
    public function setApprentiDescr($apprentiDescr)
    {
        $this->apprentiDescr = $apprentiDescr;

        return $this;
    }

    /**
     * Get apprentiDescr
     *
     * @return string
     */
    public function getApprentiDescr()
    {
        return $this->apprentiDescr;
    }

    /**
     * Set apprentiPhoto
     *
     * @param string $apprentiPhoto
     *
     * @return Apprenti
     */
    public function setApprentiPhoto($apprentiPhoto)
    {
        $this->apprentiPhoto = $apprentiPhoto;

        return $this;
    }

    /**
     * Get apprentiPhoto
     *
     * @return string
     */
    public function getApprentiPhoto()
    {
        return $this->apprentiPhoto;
    }

    /**
     * Set apprentiNom
     *
     * @param string $apprentiNom
     *
     * @return Apprenti
     */
    public function setApprentiNom($apprentiNom)
    {
        $this->apprentiNom = $apprentiNom;

        return $this;
    }

    /**
     * Get apprentiNom
     *
     * @return string
     */
    public function getApprentiNom()
    {
        return $this->apprentiNom;
    }

    /**
     * Set apprentiPrenom
     *
     * @param string $apprentiPrenom
     *
     * @return Apprenti
     */
    public function setApprentiPrenom($apprentiPrenom)
    {
        $this->apprentiPrenom = $apprentiPrenom;

        return $this;
    }

    /**
     * Get apprentiPrenom
     *
     * @return string
     */
    public function getApprentiPrenom()
    {
        return $this->apprentiPrenom;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return Apprenti
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
     * @return Apprenti
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
     * @return Apprenti
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
     * Set apprenti
     *
     * @param \HomyjobBundle\Entity\Chat $apprenti
     *
     * @return Apprenti
     */
    public function setApprenti(\HomyjobBundle\Entity\Chat $apprenti)
    {
        $this->apprenti = $apprenti;

        return $this;
    }

    /**
     * Get apprenti
     *
     * @return \HomyjobBundle\Entity\Chat
     */
    public function getApprenti()
    {
        return $this->apprenti;
    }
}
