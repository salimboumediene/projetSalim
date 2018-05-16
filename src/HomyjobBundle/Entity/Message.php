<?php

namespace HomyjobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var \HomyjobBundle\Entity\ChatMessage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="HomyjobBundle\Entity\ChatMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_id", referencedColumnName="message_id")
     * })
     */
    private $message2;



    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set message2
     *
     * @param \HomyjobBundle\Entity\ChatMessage $message2
     *
     * @return Message
     */
    public function setMessage2(\HomyjobBundle\Entity\ChatMessage $message2)
    {
        $this->message2 = $message2;

        return $this;
    }

    /**
     * Get message2
     *
     * @return \HomyjobBundle\Entity\ChatMessage
     */
    public function getMessage2()
    {
        return $this->message2;
    }
}
