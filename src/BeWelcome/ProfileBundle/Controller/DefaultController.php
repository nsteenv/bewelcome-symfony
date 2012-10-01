<?php

namespace BeWelcome\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BeWelcome\ProfileBundle\Entity\MemberSearchForm;

class DefaultController extends Controller
{
    /**
     * @Route("/list")
     * @Template()
     */
    public function indexAction()
    {
    	$request = $this->getRequest();
    	$locale = $request->getLocale();
    	$request->setLocale('fr_FR');
    
    	$memberSearchForm = new MemberSearchForm();
    	$memberSearchForm->setUserName('');
    	$memberSearchForm->setStatus('Active');
    
    	$form = $this->createFormBuilder($memberSearchForm)
    	->add('userName')
    	->add('status')
    	->getForm();
    
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		$searchUserName = $form->getData()->getUserName();
    	}else{
    		$searchUserName = '';
    	}
    
    	if ($searchUserName != ''){
    		$members = $this->getDoctrine()
    		->getRepository('BeWelcomeRoxBundle:Member')
    		->findByUserName($searchUserName);
    	}else{
    		$members = $this->getDoctrine()
    		->getRepository('BeWelcomeRoxBundle:Member')
    		->findAllOrderedByName();
    	}
    	$nbMembers = sizeof($members);
    
    
    	return array('form' => $form->createView(), 'members' => $members, 'nbMembers' => $nbMembers);
    }
    
    /**
     * @Route("/details/{id}")
     * @Template()
     */
    public function memberDetailsAction($id)
    {
    	$member = $this->getDoctrine()
    	->getRepository('BeWelcomeRoxBundle:Member')
    	->find($id);
    	return array('member' => $member);
    }
}
