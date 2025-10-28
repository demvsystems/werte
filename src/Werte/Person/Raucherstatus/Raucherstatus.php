<?php

namespace Demv\Werte\Person\Raucherstatus;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Gelegentlich;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Ja;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Nein;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Unbekannt;

/**
 * @extends AbstractProvider<RaucherstatusInterface>
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
}
