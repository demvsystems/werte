<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:00
 */

namespace Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten;

use Demv\Werte\Person\BuMoeglichkeit\BuMoeglichkeitInterface;
use Demv\Werte\Value;

/**
 * Class Moeglich
 * @package Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten
 */
final class Moeglich extends Value implements BuMoeglichkeitInterface
{
    const ID = 0;

    public function __construct()
    {
        parent::__construct(self::ID, 'BU möglich');
    }

    /**
     * @inheritdoc
     */
    public function isBuAktuellMoeglich(): bool
    {
        return true;
    }
}