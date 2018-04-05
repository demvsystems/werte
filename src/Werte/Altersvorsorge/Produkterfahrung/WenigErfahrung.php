<?php

namespace Demv\Werte\Altersvorsorge\Produkterfahrung;

use Demv\Werte\Altersvorsorge\ProdukterfahrungInterface;
use Demv\Werte\Value;

/**
 * Class WenigErfahrung
 * @package Demv\Werte\Altersvorsorge\Produkterfahrung
 */
final class WenigErfahrung extends Value implements ProdukterfahrungInterface
{
    const ID = 3;

    /**
     * Fondsgebunden constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'wenig Erfahrung');
    }
}
