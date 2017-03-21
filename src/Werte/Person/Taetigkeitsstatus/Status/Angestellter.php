<?php

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class Angestellter
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class Angestellter extends Value implements TaetigkeitsstatusInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angestellter');
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
        return true;
    }
}