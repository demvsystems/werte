<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.02.17
 * Time: 11:48
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class NeffeNichte
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class NeffeNichte extends FamiliaereBeziehung implements BeziehungsTypInterface
{
    const ID = 15;

    public function __construct()
    {
        parent::__construct(self::ID, 'Neffe/Nichte');
    }
}
