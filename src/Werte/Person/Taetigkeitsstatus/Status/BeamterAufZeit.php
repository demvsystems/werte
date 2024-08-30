<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class BeamterAufZeit
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class BeamterAufZeit extends Value implements TaetigkeitsstatusInterface
{
    const ID = 31;

    public function __construct()
    {
        parent::__construct(self::ID, 'Beamter auf Zeit');
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

    /**
     * @inheritdoc
     */
    public function hasAnspruchGrv(): bool
    {
        return false;
    }
}
