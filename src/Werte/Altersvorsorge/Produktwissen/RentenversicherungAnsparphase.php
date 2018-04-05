<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen;

use Demv\Werte\Altersvorsorge\ProduktwissenInterface;
use Demv\Werte\Value;

/**
 * Class RentenversicherungAnsparphase
 * @package Demv\Werte\Altersvorsorge\Produktwissen
 */
final class RentenversicherungAnsparphase extends Value implements ProduktwissenInterface
{
    const ID = 2;

    /**
     * RentenversicherungAnsparphase constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Rentenversicherung (Ansparphase)');
    }
}
