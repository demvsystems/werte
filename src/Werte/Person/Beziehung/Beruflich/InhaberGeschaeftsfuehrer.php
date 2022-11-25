<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class InhaberGeschaeftsfuehrer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class InhaberGeschaeftsfuehrer extends BeruflicheBeziehung
{
    const ID = 54;

    /**
     * InhaberGeschaeftsfuehrer constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Inhaber/Geschäftsführer');
    }
}
