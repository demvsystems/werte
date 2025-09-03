<?php

/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 15:31
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class BeamterAufProbeTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new BeamterAufProbe();
    }

    protected function getStatusname(): string
    {
        return 'Beamter auf Widerruf / Probe / Zeit';
    }

    protected function getStatusId(): int
    {
        return 8;
    }

    protected function hasEntgeltfortzahlung(): bool
    {
        return true;
    }

    protected function isArbeitnehmer(): bool
    {
        return false;
    }

    protected function isErwerbstaetig(): bool
    {
        return true;
    }
}
