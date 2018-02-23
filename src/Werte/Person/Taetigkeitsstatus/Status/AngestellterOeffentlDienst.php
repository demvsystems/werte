<?php

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class AngestellterOeffentlDienst
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class AngestellterOeffentlDienst extends Value implements TaetigkeitsstatusInterface
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angestellter öffentl. Dienst');
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
