<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class ArbeitgeberUnabhaengig
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class ArbeitgeberUnabhaengig extends Value implements PrioritaetenInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anlage unabhängig vom Arbeitgeber');
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Die Altersvorsorge soll unabhängig vom Arbeitgeber aufgebaut werden.';
    }
}
