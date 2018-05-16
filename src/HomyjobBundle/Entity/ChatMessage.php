<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatMessage
 *
 * @ORM\Table(name="chat_message", uniqueConstraints={@ORM\UniqueConstraint(name="chat_id", columns={"chat_id", "message_id"})}, indexes={@ORM\Index(name="chat_id_2", columns={"chat_id"}), @ORM\Index(name="message_id", columns={"message_id"})})
 * @ORM\Entity
 */
class ChatMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="message_id", type="integer", nullable=false)
     */
    private $messageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="chat_message_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chatMessageId;

    /**
     * @var \HomyjobBundle\Entity\Chat
     *
     * @ORM\ManyToOne(targetEntity="HomyjobBundle\Entity\Chat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chat_id", referencedColumnName="chat_id")
     * })
     */
    private $chat;



    /**
     * Set messageId
     *
     * @param integer $messageId
     *
     * @return ChatMessage
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Get chatMessageId
     *
     * @return integer
     */
    public function getChatMessageId()
    {
        return $this->chatMessageId;
    }

    /**
     * Set chat
     *
     * @param \HomyjobBundle\Entity\Chat $chat
     *
     * @return ChatMessage
     */
    public function setChat(\HomyjobBundle\Entity\Chat $chat = null)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return \HomyjobBundle\Entity\Chat
     */
    public function getChat()
    {
        return $this->chat;
    }
}
