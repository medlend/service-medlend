<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/09/16
 * Time: 10:53
 */
namespace AppBundle\EventListener;


use AppBundle\Services\MedService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use AppBundle\Event\LendEvent;


class TestLendListener
{
    private $medService;
    /**
     * TestLendListener constructor.
     */
    public function __construct(MedService $medService)
    {

        $this->medService = $medService;
    }

    public function lendol(LendEvent $event)
    {
        $this->medService->isseerv();
        var_dump($event->getTexte());
        die();
        // Customize your response object to display the exception details  Event\LendEvent $event

    }


}