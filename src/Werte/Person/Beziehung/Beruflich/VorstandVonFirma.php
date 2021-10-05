<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class VorstandVonFirma
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class VorstandVonFirma extends BeruflicheBeziehung
{
    const ID = 44;

    /**
     * VorstandVonFirma constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Vorstand');
    }
}
