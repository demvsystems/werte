<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\AbstractProvider;

/**
 * Class FahrzeugTypen
 * @package Demv\Werte\Fahrzeug
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
    }

    /**
     * @return FahrzeugTypInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return FahrzeugTypInterface
     */
    public function getOne(int $id): FahrzeugTypInterface
    {
        return parent::getOne($id);
    }
}