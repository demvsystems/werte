<?php

namespace Demv\Werte\Immobilie\Typ;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Immobilie\Typ\Typen\FreiesGrundstueck;
use Demv\Werte\Immobilie\Typ\Typen\Haus;
use Demv\Werte\Immobilie\Typ\Typen\Wohnung;

/**
 * Class ImmobilienTypen
 * @package Demv\Werte\Immobilie\Typ
 */
final class ImmobilienTypen extends AbstractProvider
{
    /**
     * ImmobilienTypen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Haus());
        $this->appendMember(new Wohnung());
        $this->appendMember(new FreiesGrundstueck());
    }

    /**
     * @return ImmobilienTypInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return ImmobilienTypInterface
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }
}