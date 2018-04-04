<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class FuerImmobilienerwerbVerfuegbar
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class FuerImmobilienerwerbVerfuegbar extends Value implements PrioritaetenInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anlage für Immobilienerwerb verfuegbar');
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Die Anlage soll zum Immobilienerwerb eingesetzt werden können.';
    }
}
