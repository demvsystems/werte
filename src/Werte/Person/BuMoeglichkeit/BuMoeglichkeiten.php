<?php

namespace Demv\Werte\Person\BuMoeglichkeit;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\Moeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\NichtMoeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\ZeitweiseNichtMoeglich;

/**
 * Class BuMoeglichkeiten
 * @package Demv\Werte\Person\BuMoeglichkeit
 */
final class BuMoeglichkeiten extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Moeglich());
        $this->appendMember(new NichtMoeglich());
        $this->appendMember(new ZeitweiseNichtMoeglich());
    }

    /**
     * @return BuMoeglichkeitInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return BuMoeglichkeitInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): BuMoeglichkeitInterface
    {
        return parent::getOne($id);
    }
}
