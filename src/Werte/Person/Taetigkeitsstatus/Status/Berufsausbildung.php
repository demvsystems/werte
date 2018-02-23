<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 10:30
 */

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class Berufsausbildung
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class Berufsausbildung extends Value implements TaetigkeitsstatusInterface
{
    const ID = 14;

    public function __construct()
    {
        parent::__construct(self::ID, 'Person in Berufsausbildung');
    }

    /**
     * @inheritdoc
     */
    public function isErwerbstaetig(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isArbeitnehmer(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function hasEntgeltfortzahlung(): bool
    {
        return false;
    }
}
