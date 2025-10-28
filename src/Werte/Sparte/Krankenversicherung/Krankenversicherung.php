<?php

namespace Demv\Werte\Sparte\Krankenversicherung;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\Beihilfe;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\FreieHeilfuersorge;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\GKV;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\PKV;

/**
 * @extends AbstractProvider<KrankenversicherungInterface>
 */
final class Krankenversicherung extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new GKV());
        $this->appendMember(new PKV());
        $this->appendMember(new FreieHeilfuersorge());
        $this->appendMember(new Beihilfe());
    }
}
