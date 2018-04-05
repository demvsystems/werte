<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen;

use Demv\Werte\Altersvorsorge\ProduktwissenInterface;
use Demv\Werte\Value;

/**
 * Class Lebensversicherung
 * @package Demv\Werte\Altersvorsorge\Produktwissen
 */
final class Lebensversicherung extends Value implements ProduktwissenInterface
{
    const ID = 1;

    /**
     * Lebensversicherung constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Lebensversicherung');
    }
}
