<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class StaatlichFoerderbar
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class StaatlichFoerderbar extends Value implements PrioritaetenInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anlage staatlich förderbar');
    }
    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Es sollen staatliche Förderungen genutzt werden (Steuerersparnis, Zulagen).';
    }
}
