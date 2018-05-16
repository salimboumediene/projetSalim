<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chat
 *
 * @ORM\Table(name="chat", uniqueConstraints={@ORM\UniqueConstraint(name="employeur_id", columns={"employeur_id", "apprenti_id"})}, indexes={@ORM\Index(name="employeur_id_2", columns={"employeur_id"}), @ORM\Index(name="apprenti_id", columns={"apprenti_id"}), @ORM\Index(name="message_id", columns={"message_id"})})
 * @ORM\Entity
 */
class Chat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="employeur_id", type="integer", nullable=false)
     */
    private $employeurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="apprenti_id", type="integer", nullable=false)
     */
    private $apprentiId;

    /**
     * @var \HomyjobBundle\Entity\ChatMessage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="HomyjobBundle\Entity\ChatMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chat_id", referencedColumnName="chat_id")
     * })
     */
    private $chat;

    /**
     * @var \HomyjobBundle\Entity\Message
     *
     * @ORM\ManyToOne(targetEntity="HomyjobBundle\Entity\Message")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_id", referencedColumnName="message_id")
     * })
     */
    private $message;



    /**
     * Set employeurId
     *
     * @param integer $employeurId
     *
     * @return Chat
     */
    public function setEmployeurId($employeurId)
    {
        $this->employeurId = $employeurId;

        return $this;
    }

    /**
     * Get employeurId
     *
     * @return integer
     */
    public function getEmployeurId()
    {
        return $this->employeurId;
    }

    /**
     * Set apprentiId
     *
     * @param integer $apprentiId
     *
     * @return Chat
     */
    public function setApprentiId($apprentiId)
    {
        $this->apprentiId = $apprentiId;

        return $this;
    }

    /**
     * Get apprentiId
     *
     * @return integer
     */
    public function getApprentiId()
    {
        return $this->apprentiId;
    }

    /**
     * Set chat
     *
     * @param \HomyjobBundle\Entity\ChatMessage $chat
     *
     * @return Chat
     */
    public function setChat(\HomyjobBundle\Entity\ChatMessage $chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return \HomyjobBundle\Entity\ChatMessage
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set message
     *
     * @param \HomyjobBundle\Entity\Message $message
     *
     * @return Chat
     */
    public function setMessage(\HomyjobBundle\Entity\Message $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \HomyjobBundle\Entity\Message
     */
    public function getMessage()
    {
        return $this->message;
    }
}
