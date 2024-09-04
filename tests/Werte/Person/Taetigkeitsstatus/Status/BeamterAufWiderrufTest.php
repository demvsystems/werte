<?php

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufWiderruf;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class BeamterAufWiderrufTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new BeamterAufWiderruf();
    }

    protected function getStatusname(): string
    {
        return 'Beamter auf Widerruf';
    }

    protected function getStatusId(): int
    {
        return 29;
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
