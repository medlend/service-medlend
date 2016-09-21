<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/09/16
 * Time: 15:30
 */

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MyListener
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $kernel    = $event->getKernel();
        $request   = $event->getRequest();
        $container = $this->container;
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response  = $event->getResponse();
        $request   = $event->getRequest();
        $kernel    = $event->getKernel();
        $container = $this->container;
    }
}