<?php

namespace Demv\Werte\Altersvorsorge\Produkterfahrung;

use Demv\Werte\Altersvorsorge\ProdukterfahrungInterface;
use Demv\Werte\Value;

/**
 * Class KeineErfahrung
 * @package Demv\Werte\Altersvorsorge\Produkterfahrung
 */
final class KeineErfahrung extends Value implements ProdukterfahrungInterface
{
    const ID = 1;

    /**
     * Fondsgebunden constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'keine Erfahrung');
    }
}
