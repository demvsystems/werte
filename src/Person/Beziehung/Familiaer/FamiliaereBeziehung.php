<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:33
 */

namespace Demv\Werte\Person\Beziehung\Familiaer;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
use Demv\Werte\Value;

class FamiliaereBeziehung extends Value implements BeziehungsTypInterface
{
    public function isFamiliaer(): bool
    {
        return true;
    }

    public function isBeruflich(): bool
    {
        return false;
    }

}