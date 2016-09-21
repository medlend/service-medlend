<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/09/16
 * Time: 10:53
 */
namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;


class TestListener
{
    public function lendol (FilterResponseEvent $event)
    {

        // Customize your response object to display the exception details
        $response = new Response();
        $response->setContent("test listner ");

//die("testtttttttttttt");
        $event->setResponse($response);
    }
}