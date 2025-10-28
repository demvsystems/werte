<?php

declare(strict_types=1);

namespace Demv\Werte\Vorgang;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Vorgang\VorgangTypen\AntragEinreichen;
use Demv\Werte\Vorgang\VorgangTypen\Kuendigung;
use Demv\Werte\Vorgang\VorgangTypen\Risikovoranfrage;
use Demv\Werte\Vorgang\VorgangTypen\Schadenmeldung;

/**
 * @extends AbstractProvider<VorgangTypInterface>
 */
final class VorgangTypen extends AbstractProvider
{
    /**
     * VorgangTyp constructor.
     */
    public function __construct()
    {
        $this->appendMember(new AntragEinreichen());
        $this->appendMember(new Kuendigung());
        $this->appendMember(new Risikovoranfrage());
        $this->appendMember(new Schadenmeldung());
    }
}
