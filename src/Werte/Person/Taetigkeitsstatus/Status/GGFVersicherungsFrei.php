<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 17:30
 */

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class GeschaeftsfuehrenderGesellschafter
 *
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class GGFVersicherungsFrei extends Value implements TaetigkeitsstatusInterface
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftsführender Gesellschafter mit Entgeltfortzahlung');
    }

    /**
     * @return bool
     */
    public function isErwerbstaetig(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArbeitnehmer(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasEntgeltfortzahlung(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function hasAnspruchGrv(): bool
    {
        return false;
    }
}
