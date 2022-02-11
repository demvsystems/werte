<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen\Info;

use Demv\Werte\Altersvorsorge\ProduktwissenInfoInterface;
use Demv\Werte\Value;

/**
 * Class Fondsgebunden
 * @package Demv\Werte\Altersvorsorge\Produktwissen\Info
 */
final class Fondsgebunden extends Value implements ProduktwissenInfoInterface
{
    const ID = 1;

    /**
     * Fondsgebunden constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'fondsgebunden');
    }

    public function getDescription(): string
    {
        return 'ohne Garantie für maximale Flexibilität und Renditechance bei der Anlage.';
    }
}
