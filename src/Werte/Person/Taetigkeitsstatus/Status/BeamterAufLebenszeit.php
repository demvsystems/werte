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
 * Class BeamterAufLebenszeit
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class BeamterAufLebenszeit extends Value implements TaetigkeitsstatusInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Beamter auf Lebenszeit');
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
        return false;
    }

    /**
     * @inheritdoc
     */
    public function hasEntgeltfortzahlung(): bool
    {
        return true;
    }
}