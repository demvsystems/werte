<?php

namespace Demv\Werte\Person\Raucherstatus;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Gelegentlich;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Ja;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Nein;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Unbekannt;

/**
 * Class Raucherstatus
 * @package Demv\Werte\Person\Raucherstatus
 */
class Raucherstatus extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Unbekannt());
        $this->appendMember(new Ja());
        $this->appendMember(new Nein());
        $this->appendMember(new Gelegentlich());
    }

    /**
     * @return RaucherstatusInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return RaucherstatusInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): RaucherstatusInterface
    {
        return parent::getOne($id);
    }
}
