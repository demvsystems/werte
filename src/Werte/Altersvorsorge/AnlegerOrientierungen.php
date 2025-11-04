<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Konservativ;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Risikoorientiert;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Sicherheitsorientiert;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Wachstumsorientiert;

/**
 * @extends AbstractProvider<AnlegerOrientierungInterface>
 */
final class AnlegerOrientierungen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Sicherheitsorientiert());
        $this->appendMember(new Konservativ());
        $this->appendMember(new Wachstumsorientiert());
        $this->appendMember(new Risikoorientiert());
    }
}
