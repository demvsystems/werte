<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:46
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Grosseltern
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Grosseltern extends FamiliaereBeziehung
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Großvater/Großmutter');
    }
}
