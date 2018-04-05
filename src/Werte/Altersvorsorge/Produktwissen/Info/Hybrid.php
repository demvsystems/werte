<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen\Info;

use Demv\Werte\Altersvorsorge\ProduktwissenInfoInterface;
use Demv\Werte\Value;

/**
 * Class Hybrid
 * @package Demv\Werte\Altersvorsorge\Produktwissen\Info
 */
final class Hybrid extends Value implements ProduktwissenInfoInterface
{
    const ID = 2;

    /**
     * Fondsgebunden constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Hybrid');
    }
}
