<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class Zweigstelle
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Zweigstelle extends BeruflicheBeziehung implements BeziehungsTypInterface
{
    const ID = 26;

    public function __construct()
    {
        parent::__construct(self::ID, 'Zweigstelle');
    }
}
