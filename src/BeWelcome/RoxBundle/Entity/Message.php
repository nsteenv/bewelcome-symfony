<?php

namespace BeWelcome\RoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeWelcome\RoxBundle\Entity\Message
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    /**
     * @var \DateTime $whenFirstRead
     *
     * @ORM\Column(name="WhenFirstRead", type="datetime")
     */
    private $whenFirstRead;
    
    /**
     * @var string $Status
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var string $message
     *
     * @ORM\Column(name="Message", type="string", length=255)
     */
    private $message;

    /**
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="sentMessages")
     * @ORM\JoinColumn(name="IdSender", referencedColumnName="id")
     */
    protected $sender;
    
    /**
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="receivedMessages")
     * @ORM\JoinColumn(name="IdReceiver", referencedColumnName="id")
     */
    protected $receiver;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Message
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Message
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set message
     *
     * @param string $message
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
     * Set sender
     *
     * @param BeWelcome\RoxBundle\Entity\Member $sender
     * @return Messages
     */
    public function setSender(\BeWelcome\RoxBundle\Entity\Member $sender = null)
    {
    	$this->sender = $sender;
    
    	return $this;
    }
    
    /**
     * Get sender
     *
     * @return BeWelcome\RoxBundle\Entity\Member
     */
    public function getSender()
    {
    	return $this->sender;
    }
    
    /**
     * Set receiver
     *
     * @param BeWelcome\RoxBundle\Entity\Member $receiver
     * @return Messages
     */
    public function setReceiver(\BeWelcome\RoxBundle\Entity\Member $receiver = null)
    {
    	$this->receiver = $receiver;
    
    	return $this;
    }
    
    /**
     * Get receiver
     *
     * @return BeWelcome\RoxBundle\Entity\Member
     */
    public function getReceiver()
    {
    	return $this->receiver;
    }
    
    /**
     * Set whenFirstRead
     *
     * @param \DateTime $whenFirstRead
     * @return Messages
     */
    public function setWhenFirstRead($whenFirstRead)
    {
    	$this->whenFirstRead = $whenFirstRead;
    
    	return $this;
    }
    
    /**
     * Get whenFirstRead
     *
     * @return \DateTime
     */
    public function getWhenFirstRead()
    {
    	return $this->whenFirstRead;
    }
}
