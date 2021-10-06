<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Zweigstelle
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Zweigstelle extends BeruflicheBeziehung
{
    const ID = 26;

    public function __construct()
    {
        parent::__construct(self::ID, 'Zweigstelle');
    }
}
