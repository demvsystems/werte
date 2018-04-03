<?php

namespace Demv\Werte\Altersvorsorge\AnlegerOrientierungen;

use Demv\Werte\Altersvorsorge\AnlegerOrientierungInterface;
use Demv\Werte\Value;

/**
 * Class Sicherheitsorientiert
 * @package Demv\Werte\Altersvorsorge\AnlegerOrientierungen
 */
final class Sicherheitsorientiert extends Value implements AnlegerOrientierungInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Sicherheitsorientiert');
    }
}
