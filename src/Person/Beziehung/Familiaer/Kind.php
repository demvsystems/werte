<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:46
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

final class Kind extends FamiliaereBeziehung
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kind');
    }
}