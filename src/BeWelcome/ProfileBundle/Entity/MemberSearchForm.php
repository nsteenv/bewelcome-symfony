<?php

namespace BeWelcome\ProfileBundle\Entity;

class MemberSearchForm
{
	private $userName;
	
	private $status;

	public function getUserName()
	{
		return $this->userName;
	}
	
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}

	public function getStatus()
	{
		return $this->status;
	}
	
	public function setStatus($status)
	{
		$this->status = $status;
	}

}

?>