<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen;

use Demv\Werte\Altersvorsorge\ProduktwissenInterface;
use Demv\Werte\Value;

/**
 * Class TermfixLebensversicherung
 * @package Demv\Werte\Altersvorsorge\Produktwissen
 */
final class TermfixLebensversicherung extends Value implements ProduktwissenInterface
{
    const ID = 4;

    /**
     * RentenversicherungAnsparphase constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Termfix-Lebensversicherung');
    }
}
