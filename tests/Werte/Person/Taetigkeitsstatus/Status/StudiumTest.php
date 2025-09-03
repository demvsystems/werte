<?php

/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 16:43
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Studium;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class StudiumTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Studium();
    }

    protected function getStatusname(): string
    {
        return 'Person in Studium';
    }

    protected function getStatusId(): int
    {
        return 15;
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
