<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class ExArbeitgeber
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class ExArbeitgeber extends BeruflicheBeziehung
{
    const ID = 22;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ex-Arbeitgeber');
    }
}
