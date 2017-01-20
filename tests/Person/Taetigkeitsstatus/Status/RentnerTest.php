<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 16:29
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Rentner;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class RentnerTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Rentner();
    }

    protected function getStatusname(): string
    {
        return 'Rentner / Ruheständler';
    }

    protected function getStatusId(): int
    {
        return 19;
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