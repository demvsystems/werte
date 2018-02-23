<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:46
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Geschwister
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Geschwister extends FamiliaereBeziehung
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bruder/Schwester');
    }
}
