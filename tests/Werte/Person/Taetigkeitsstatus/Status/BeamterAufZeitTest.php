<?php

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufZeit;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class BeamterAufZeitTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new BeamterAufZeit();
    }

    protected function getStatusname(): string
    {
        return 'Beamter auf Zeit';
    }

    protected function getStatusId(): int
    {
        return 31;
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
