<?php

namespace Lte\SpectacleBundle\Controller;

use Lte\SpectacleBundle\Entity\Spectacle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LteSpectacleBundle:Default:index.html.twig');
    }

    public function createAction() 
    {
    	$spectacle = new Spectacle();
    	$spectacle->setTitle("Pâques en corse");
    	$spectacle->setNbrDanseurs("8");
    	$spectacle->setDescription("Pâques à la grecque à Carghèse");
    	$spectacle->setLieu("Carghèse");
    	$spectacle->setAdresse("Place du village de Carghèse");
    	$spectacle->setVille("Carghèse");
    	$spectacle->setCodePostal("2A");
    	$spectacle->setDateSpectacle(date_create(date("Y-m-d",mktime(0,0,0,3,31,2013))));

    	$em = $this->getDoctrine()->getManager();
	    $em->persist($spectacle);
	    $em->flush();

	    return new Response('Created spectacle id '.$spectacle->getId());
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
	    var_dump($spectacle);
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
}
