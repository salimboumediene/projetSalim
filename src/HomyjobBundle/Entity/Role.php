<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="HomyjobBundle\Repository\RoleRepository")
 */
class Role
{
    /**
     * @var string
     */
    private $roleApprenti;

    /**
     * @var string
     */
    private $roleEmployeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_value", type="boolean", nullable=false)
     */
    private $roleValue= true;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * Set roleValue
     *
     * @param integer $roleValue
     *
     * @return Role
     */
    public function setRoleValue($roleValue)
    {
        $this->roleValue = $roleValue;

        return $this;
    }

    /**
     * Set roleEmployeur
     *
     * @param integer $roleEmployeur
     *
     * @return Role
     */
    public function setRoleEmployeur($roleEmployeur)
    {
        $this->roleApprenti = $roleEmployeur;

        return $this;
    }

    /**
     * Get roleEmployeur
     *
     * @return string
     */
    public function getRoleEmployeur()
    {
        return $this->roleEmployeur;
    }

/**
     * Set roleApprenti
     *
     * @param integer $roleApprenti
     *
     * @return Role
     */
    public function setRoleApprenti($roleApprenti)
    {
        $this->roleApprenti = $roleApprenti;

        return $this;
    }
    
    /**
     * Get roleApprenti
     *
     * @return string
     */
    public function getRoleApprenti()
    {
        return $this->roleApprenti;
    }

    /**
     * Get roleValue
     *
     * @return integer
     */
    public function getRoleValue()
    {
        return $this->roleValue;
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
}
