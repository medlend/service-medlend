<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Event\LendEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/medlend")
     */
    public function index2Action(Request $request)
    {
        $dispatcher = $this->get('event_dispatcher');
        $event = new LendEvent("Test event");
        $dispatcher->dispatch(LendEvent::NAME, $event);


        return $this->render('AppBundle:medlend:index.html.twig', array('name' => "Test controller"));
    }

    /**
     * @Route("/med")
     *
     */
    public function index3Action(Request $request)
    {
$this->get('med.serv')->isseerv();
       // $test->isseerv();

        return $this->render('AppBundle:medlend:index.html.twig', array('name' => "meddddddddddddddddd"));


    }

}
