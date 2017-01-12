<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:33
 */

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
use Demv\Werte\Value;

/**
 * Class BeruflicheBeziehung
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
class BeruflicheBeziehung extends Value implements BeziehungsTypInterface
{
    final public function isFamiliaer(): bool
    {
        return false;
    }

    final public function isBeruflich(): bool
    {
        return true;
    }

}