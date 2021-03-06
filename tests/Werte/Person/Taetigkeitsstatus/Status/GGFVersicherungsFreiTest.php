<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 17:36
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\GGFVersicherungsFrei;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class GGFVersicherungsFreiTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new GGFVersicherungsFrei();
    }

    protected function getStatusname(): string
    {
        return 'Geschäftsführender Gesellschafter mit Entgeltfortzahlung';
    }

    protected function getStatusId(): int
    {
        return 11;
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
