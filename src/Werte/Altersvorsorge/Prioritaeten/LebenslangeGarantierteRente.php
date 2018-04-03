<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class LebenslangeGarantierteRente
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class LebenslangeGarantierteRente extends Value implements PrioritaetenInterface
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'Lebenslange Garantierte Rente');
    }
    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Die Auszahlung soll als lebenslange, garantierte Rente erfolgen.';
    }
}
