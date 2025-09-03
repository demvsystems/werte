<?php

/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 14:41
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\AngestellterOeffentlDienst;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class AngestellterOeffentlDienstTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new AngestellterOeffentlDienst();
    }

    protected function getStatusname(): string
    {
        return 'Angestellter öffentl. Dienst';
    }

    protected function getStatusId(): int
    {
        return 10;
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
