<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Hausverwaltung
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class ImmobilienVerwaltetVon extends BeruflicheBeziehung
{
    const ID = 41;

    public function __construct()
    {
        parent::__construct(self::ID,'Immobilien verwaltet von');
    }
}
