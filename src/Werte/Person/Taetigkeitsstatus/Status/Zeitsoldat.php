<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class Zeitsoldat
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class Zeitsoldat extends Value implements TaetigkeitsstatusInterface
{
    const ID = 27;

    public function __construct()
    {
        parent::__construct(self::ID, 'Zeitsoldat');
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