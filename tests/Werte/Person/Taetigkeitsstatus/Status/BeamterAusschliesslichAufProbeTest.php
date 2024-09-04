<?php

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAusschliesslichAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class BeamterAusschliesslichAufProbeTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new BeamterAusschliesslichAufProbe();
    }

    protected function getStatusname(): string
    {
        return 'Beamter auf Probe';
    }

    protected function getStatusId(): int
    {
        return 30;
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
