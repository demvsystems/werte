<?php

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class Angestellter
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class Bundeswehr extends Value implements TaetigkeitsstatusInterface
{
    const ID = 26;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bundeswehr');
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

    /**
     * @inheritdoc
     */
    public function hasAnspruchGrv(): bool
    {
        return true;
    }
}
