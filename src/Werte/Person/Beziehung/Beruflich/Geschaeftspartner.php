<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class Geschaeftspartnerextends
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Geschaeftspartner extends BeruflicheBeziehung implements BeziehungsTypInterface
{
    const ID = 24;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftspartner');
    }
}
