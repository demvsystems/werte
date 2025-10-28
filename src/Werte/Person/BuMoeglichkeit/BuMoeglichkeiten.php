<?php

namespace Demv\Werte\Person\BuMoeglichkeit;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\Moeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\NichtMoeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\ZeitweiseNichtMoeglich;

/**
 * @extends AbstractProvider<BuMoeglichkeitInterface>
 */
final class BuMoeglichkeiten extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Moeglich());
        $this->appendMember(new NichtMoeglich());
        $this->appendMember(new ZeitweiseNichtMoeglich());
    }
}
