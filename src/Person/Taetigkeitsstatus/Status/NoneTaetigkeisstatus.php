<?php
/**
 * Created by PhpStorm.
 * User: keno
 * Date: 24.01.17
 * Time: 09:32
 */

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\NoneValue;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

/**
 * Class NoneTaetigkeisstatus
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class NoneTaetigkeisstatus extends NoneValue implements TaetigkeitsstatusInterface
{
    /**
     * @return bool
     */
    public function isErwerbstaetig(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isArbeitnehmer(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function hasEntgeltfortzahlung(): bool
    {
        return false;
    }
}