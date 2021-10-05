<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Angehoeriger
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Angehoeriger extends BeruflicheBeziehung
{
    const ID = 53;

    /**
     * Angehoeriger constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID,'Angehöriger');
    }
}
