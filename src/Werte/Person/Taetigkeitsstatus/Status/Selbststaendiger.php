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
 * Class Selbststaendiger
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class Selbststaendiger extends Value implements TaetigkeitsstatusInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Selbstständiger / Freiberufler');
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
        return false;
    }

    /**
     * @inheritdoc
     */
    public function hasAnspruchGkv(): bool
    {
        return false;
    }
}
