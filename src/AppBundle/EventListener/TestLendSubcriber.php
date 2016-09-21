<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/09/16
 * Time: 16:17
 */

namespace AppBundle\EventListener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AppBundle\Event\LendEvent;
use AppBundle\Services\MedService;

class TestLendSubcriber implements EventSubscriberInterface
{
    private $medService;
    /**
     * TestLendListener constructor.
     */
    public function __construct(MedService $medService)
    {

        $this->medService = $medService;
    }

    public static function getSubscribedEvents()
    {
          return array( LendEvent::NAME  => 'lendol', );
    }

    public function lendol(LendEvent $event)
    {
        $this->medService->isseerv();
        var_dump($event->getTexte());
        die();


    }
}