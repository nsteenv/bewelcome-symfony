<?php

namespace BeWelcome\RoxBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MemberRepository extends EntityRepository
{
	public function findAllOrderedByName()
	{
		return $this->getEntityManager()
			->createQuery('SELECT m FROM BeWelcomeRoxBundle:Member m ORDER BY m.username ASC')
			->getResult();
	}
}

?>