<?php

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Angestellter;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class AngestellterTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Angestellter();
    }

    protected function getStatusname(): string
    {
        return 'Angestellter';
    }

    protected function getStatusId(): int
    {
        return 2;
    }

    protected function hasEntgeltfortzahlung(): bool
    {
        return true;
    }

    protected function isArbeitnehmer(): bool
    {
        return true;
    }

    protected function isErwerbstaetig(): bool
    {
        return true;
    }
}
