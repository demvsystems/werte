<?php

namespace Demv\Werte\Immobilie\Typ;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Immobilie\Typ\Typen\FreiesGrundstueck;
use Demv\Werte\Immobilie\Typ\Typen\Haus;
use Demv\Werte\Immobilie\Typ\Typen\Wohnung;
use Demv\Werte\ValueInterface;

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
     * @return ImmobilienTypInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id): ImmobilienTypInterface
    {
        return parent::getOne($id);
    }
}
