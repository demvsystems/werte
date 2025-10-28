<?php

namespace Demv\Werte\Adresse;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Adresse\AdressTypen\Geschaeftlich;
use Demv\Werte\Adresse\AdressTypen\Privat;

/**
 * @extends AbstractProvider<AdressTypInterface>
 */
final class AdressTypen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Privat());
        $this->appendMember(new Geschaeftlich());
    }
}
