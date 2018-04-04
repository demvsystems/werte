<?php

namespace Demv\Werte\Altersvorsorge\AnlegerOrientierungen;

use Demv\Werte\Altersvorsorge\AnlegerOrientierungInterface;
use Demv\Werte\Value;

/**
 * Class Risikoorientiert
 * @package Demv\Werte\Altersvorsorge\AnlegerOrientierungen
 */
final class Risikoorientiert extends Value implements AnlegerOrientierungInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Risikoorientiert');
    }
}
