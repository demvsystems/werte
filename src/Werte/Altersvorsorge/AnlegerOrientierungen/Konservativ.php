<?php

namespace Demv\Werte\Altersvorsorge\AnlegerOrientierungen;

use Demv\Werte\Altersvorsorge\AnlegerOrientierungInterface;
use Demv\Werte\Value;

/**
 * Class Konservativ
 * @package Demv\Werte\Altersvorsorge\AnlegerOrientierungen
 */
final class Konservativ extends Value implements AnlegerOrientierungInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Konservativ');
    }
}
