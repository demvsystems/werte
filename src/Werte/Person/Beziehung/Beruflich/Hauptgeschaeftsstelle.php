<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Hauptgeschaeftsstelle
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Hauptgeschaeftsstelle extends BeruflicheBeziehung
{
    const ID = 25;

    public function __construct()
    {
        parent::__construct(self::ID, 'Hauptgeschäftsstelle');
    }
}
