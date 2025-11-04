<?php

namespace Demv\Werte\Person\Wohnsituation;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiAndererPerson;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiEltern;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\InEigentum;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\ZurMiete;

/**
 * @extends AbstractProvider<WohnsituationInterface>
 */
final class Wohnsituationen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new ZurMiete());
        $this->appendMember(new InEigentum());
        $this->appendMember(new BeiEltern());
        $this->appendMember(new BeiAndererPerson());
    }
}
