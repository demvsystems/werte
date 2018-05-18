<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class Hauptgeschaeftsstelle
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Hauptgeschaeftsstelle extends BeruflicheBeziehung implements BeziehungsTypInterface
{
    const ID = 25;

    public function __construct()
    {
        parent::__construct(self::ID, 'Hauptgeschäftsstelle');
    }
}
