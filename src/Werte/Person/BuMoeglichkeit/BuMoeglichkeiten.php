<?php

namespace Demv\Werte\Person\BuMoeglichkeit;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\Moeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\NichtMoeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\ZeitweiseNichtMoeglich;
use Demv\Werte\ValueInterface;

final class BuMoeglichkeiten extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Moeglich());
        $this->appendMember(new NichtMoeglich());
        $this->appendMember(new ZeitweiseNichtMoeglich());
    }

    /**
     * @return BuMoeglichkeitInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id): BuMoeglichkeitInterface
    {
        return parent::getOne($id);
    }
}
