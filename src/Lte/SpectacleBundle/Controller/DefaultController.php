<?php

namespace Lte\SpectacleBundle\Controller;

use Lte\SpectacleBundle\Entity\Spectacle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LteSpectacleBundle:Default:index.html.twig');
    }

    public function newAction(Request $request) 
    {
    	$spectacle = new Spectacle();
    	
    	$form = $this->createFormBuilder($spectacle)
    		->add('title')
    		->add('description','textarea')
    		->add('nbr_danseurs')
    		->add('date_spectacle','date')
    		->add('date_spectacle_fin','date')
    		->add('lieu')
    		->add('adresse')
    		->add('ville')
    		->add('code_postal')
    		->add('save','submit')
    		->getForm();

    	$form->handleRequest($request);

    	if ($form->isValid()) {
    		$em = $this->getDoctrine()->getManager();
		    $em->persist($spectacle);
		    $em->flush();

		    return $this->redirect($this->generateUrl('lte_spectacle_homepage'));
    	}

    	return $this->render('LteSpectacleBundle:Default:new.html.twig',array('form'=>$form->createView(),));

    }

    public function editAction($spectacle_id, Request $request)
    {
    	$spectacle = $this->getDoctrine()
        ->getRepository('LteSpectacleBundle:Spectacle')
        ->find($spectacle_id);

        $form = $this->createFormBuilder($spectacle)
    		->add('title')
    		->add('description','text')
    		->add('nbr_danseurs')
    		->add('date_spectacle','date')
    		->add('date_spectacle_fin','date')
    		->add('lieu')
    		->add('adresse')
    		->add('ville')
    		->add('code_postal')
    		->add('save','submit')
    		->getForm();

    	$form->handleRequest($request);

    	if ($form->isValid()) {
    		$em = $this->getDoctrine()->getManager();
		    $em->persist($spectacle);
		    $em->flush();

		    return $this->redirect($this->generateUrl('lte_spectacle_homepage'));
    	}

    	return $this->render('LteSpectacleBundle:Default:new.html.twig',array('form'=>$form->createView(),));
    }

    public function detailAction($spectacle_id)
    {
    	$spectacle = $this->getDoctrine()
        ->getRepository('LteSpectacleBundle:Spectacle')
        ->find($spectacle_id);

	    if (!$spectacle) {
	        throw $this->createNotFoundException(
	            'No spectacle found for id '.$spectacle_id
	        );
	    }
	    
    	return new Response('View spectacle id '.$spectacle->getId());
    }

    public function deleteAction($spectacle_id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$spectacle = $em->getRepository('LteSpectacleBundle:Spectacle')->find($spectacle_id);

    	$em->remove($spectacle);
    	$em->flush();

    	return new Response('Delete spectacle id '.$spectacle_id);
    }

    public function listAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$spectacle = $em->getRepository('LteSpectacleBundle:Spectacle')->findAll();
    	$em->flush();
    	var_dump($spectacle);
    	return new Response('Tableau');
    }
}