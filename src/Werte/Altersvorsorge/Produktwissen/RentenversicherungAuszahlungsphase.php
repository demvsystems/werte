<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen;
use Demv\Werte\Altersvorsorge\ProduktwissenInterface;
use Demv\Werte\Value;

/**
 * Class RentenversicherungAuszahlungsphase
 * @package Demv\Werte\Altersvorsorge\Produktwissen
 */
final class RentenversicherungAuszahlungsphase extends Value implements ProduktwissenInterface
{
    const ID = 3;

    /**
     * RentenversicherungAnsparphase constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Rentenversicherung (Auszahlungsphase)');
    }
}
