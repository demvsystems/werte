<?php

namespace Demv\Werte\Altersvorsorge\AnlegerOrientierungen;

use Demv\Werte\Altersvorsorge\AnlegerOrientierungInterface;
use Demv\Werte\Value;

/**
 * Class Wachstumsorientiert
 * @package Demv\Werte\Altersvorsorge\AnlegerOrientierungen
 */
final class Wachstumsorientiert extends Value implements AnlegerOrientierungInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Wachstumsorientiert');
    }
}
