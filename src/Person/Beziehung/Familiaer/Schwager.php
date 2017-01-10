<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:46
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

class Schwager extends FamiliaereBeziehung
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'Schwager/Schwägerin');
    }
}