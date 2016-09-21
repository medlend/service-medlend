<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/09/16
 * Time: 14:34
 */
namespace AppBundle\Event;
use Symfony\Component\EventDispatcher\Event;

class LendEvent extends Event
{
    const NAME = 'med.lend';

    protected $texte;

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    public function __construct($texte)
    {
        $this->texte = $texte;
    }


}