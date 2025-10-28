<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\AbstractProvider;

/**
 * @extends AbstractProvider<FahrzeugTypInterface>
 */
final class FahrzeugTypen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Pkw());
        $this->appendMember(new Motorrad());
        $this->appendMember(new Mofa());
        $this->appendMember(new Anhaenger());
        $this->appendMember(new Quad());
        $this->appendMember(new Lkw());
        $this->appendMember(new Oldtimer());
        $this->appendMember(new Wohnmobil());
        $this->appendMember(new Ebike());
        $this->appendMember(new Fahrrad());
        $this->appendMember(new Drohne());
        $this->appendMember(new Boot());
        $this->appendMember(new Schlepper());
    }
}
