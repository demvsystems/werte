<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.02.17
 * Time: 11:47
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class OnkelTante
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class OnkelTante extends FamiliaereBeziehung implements BeziehungsTypInterface
{
    const ID = 14;

    public function __construct()
    {
        parent::__construct(self::ID, 'Onkel/Tante');
    }
}
