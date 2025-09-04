<?php

/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 16:25
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Hausfrau;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class HausfrauTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Hausfrau();
    }

    protected function getStatusname(): string
    {
        return 'Hausfrau / Hausmann';
    }

    protected function getStatusId(): int
    {
        return 17;
    }

    protected function hasEntgeltfortzahlung(): bool
    {
        return false;
    }

    protected function isArbeitnehmer(): bool
    {
        return false;
    }

    protected function isErwerbstaetig(): bool
    {
        return false;
    }
}
