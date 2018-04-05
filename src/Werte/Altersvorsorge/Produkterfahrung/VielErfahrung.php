<?php

namespace Demv\Werte\Altersvorsorge\Produkterfahrung;

use Demv\Werte\Altersvorsorge\ProdukterfahrungInterface;
use Demv\Werte\Value;

/**
 * Class VielErfahrung
 * @package Demv\Werte\Altersvorsorge\Produkterfahrung
 */
final class VielErfahrung extends Value implements ProdukterfahrungInterface
{
    const ID = 2;

    /**
     * Fondsgebunden constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'viel Erfahrung');
    }
}
