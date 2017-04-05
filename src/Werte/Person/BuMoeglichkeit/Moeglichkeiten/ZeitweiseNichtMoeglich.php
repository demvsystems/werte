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
 * Class ZeitweiseNichtMoeglich
 * @package Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten
 */
final class ZeitweiseNichtMoeglich extends Value implements BuMoeglichkeitInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'BU zeitweise nicht Möglich');
    }

    /**
     * @inheritdoc
     */
    public function isBuAktuellMoeglich(): bool
    {
        return false;
    }
}