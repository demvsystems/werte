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
 * Class NichtMoeglich
 * @package Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten
 */
final class NichtMoeglich extends Value implements BuMoeglichkeitInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'BU nicht Möglich');
    }

    /**
     * @inheritdoc
     */
    public function isBuAktuellMoeglich(): bool
    {
        return false;
    }

}