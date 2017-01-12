<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:46
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Enkel
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Enkel extends FamiliaereBeziehung
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Enkel/Enkelin');
    }
}