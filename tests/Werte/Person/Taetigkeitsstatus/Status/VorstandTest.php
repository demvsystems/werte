<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 16:45
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Vorstand;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class VorstandTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Vorstand();
    }

    protected function getStatusname(): string
    {
        return 'Vorstand';
    }

    protected function getStatusId(): int
    {
        return 12;
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
