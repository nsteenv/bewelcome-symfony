<?php

namespace BeWelcome\RoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeWelcome\RoxBundle\Entity\Member
 *
 * @ORM\Table(name="members")
 * @ORM\Entity(repositoryClass="BeWelcome\RoxBundle\Repository\MemberRepository")
 */
class Member
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
	 * @var string $username
	 *
	 * @ORM\Column(name="Username", type="string", length=255)
	 */
	private $username;

	/**
	 * @var string $email
	 *
	 * @ORM\Column(name="Email", type="string", length=255)
	 */
	private $email;

	/**
	 * @var string $firstName
	 *
	 * @ORM\Column(name="FirstName", type="string", length=255)
	 */
	private $firstName;

	/**
	 * @var string $lastName
	 *
	 * @ORM\Column(name="LastName", type="string", length=255)
	 */
	private $lastName;

	/**
	 * @var string $status
	 *
	 * @ORM\Column(name="Status", type="string", length=255)
	 */
	private $status;


	/**
	 * @ORM\OneToMany(targetEntity="Message", mappedBy="sender")
	 */
	private $sentMessages;

	/**
	 * @ORM\OneToMany(targetEntity="Message", mappedBy="receiver")
	 */
	private $receivedMessages;

	public function __construct()
	{
		$this->messages = new ArrayCollection();
		$this->receivedMessages = new ArrayCollection();
	}
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
	 * Set username
	 *
	 * @param string $username
	 * @return Member
	 */
	public function setUsername($username)
	{
		$this->username = $username;

		return $this;
	}

	/**
	 * Get username
	 *
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 * @return Member
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set firstName
	 *
	 * @param string $firstName
	 * @return Member
	 */
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;

		return $this;
	}

	/**
	 * Get firstName
	 *
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * Set lastName
	 *
	 * @param string $lastName
	 * @return Member
	 */
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;

		return $this;
	}

	/**
	 * Get lastName
	 *
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * Set status
	 *
	 * @param string $status
	 * @return Member
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
	 * Add sentMessages
	 *
	 * @param BeWelcome\RoxBundle\Entity\Message $sentMessages
	 * @return Members
	 */
	public function addSentMessage(\BeWelcome\RoxBundle\Entity\Message $sentMessages)
	{
		$this->sentMessages[] = $sentMessages;

		return $this;
	}

	/**
	 * Remove sentMessages
	 *
	 * @param BeWelcome\RoxBundle\Entity\Message $sentMessages
	 */
	public function removeSentMessage(\BeWelcome\RoxBundle\Entity\Message $sentMessages)
	{
		$this->sentMessages->removeElement($sentMessages);
	}

	/**
	 * Get sentMessages
	 *
	 * @return Doctrine\Common\Collections\Collection
	 */
	public function getSentMessages()
	{
		return $this->sentMessages;
	}

	/**
	 * Add receivedMessages
	 *
	 * @param BeWelcome\RoxBundle\Entity\Message $receivedMessages
	 * @return Members
	 */
	public function addReceivedMessage(\BeWelcome\RoxBundle\Entity\Message $receivedMessages)
	{
		$this->receivedMessages[] = $receivedMessages;

		return $this;
	}

	/**
	 * Remove receivedMessages
	 *
	 * @param BeWelcome\RoxBundle\Entity\Message $receivedMessages
	 */
	public function removeReceivedMessage(\BeWelcome\RoxBundle\Entity\Message $receivedMessages)
	{
		$this->receivedMessages->removeElement($receivedMessages);
	}

	/**
	 * Get receivedMessages
	 *
	 * @return Doctrine\Common\Collections\Collection
	 */
	public function getReceivedMessages()
	{
		return $this->receivedMessages;
	}
}
