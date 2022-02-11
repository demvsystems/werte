<?php

namespace Demv\Werte\Altersvorsorge\Produktwissen\Info;

use Demv\Werte\Altersvorsorge\ProduktwissenInfoInterface;
use Demv\Werte\Value;

/**
 * Class Klassisch
 * @package Demv\Werte\Altersvorsorge\Produktwissen\Info
 */
final class Klassisch extends Value implements ProduktwissenInfoInterface
{
    const ID = 3;

    /**
     * Fondsgebunden constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'klassisch');
    }

    public function getDescription(): string
    {
        return 'mit garantierter Mindestverzinsung.';
    }
}
