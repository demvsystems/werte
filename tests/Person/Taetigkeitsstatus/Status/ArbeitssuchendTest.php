<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 15:08
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Arbeitssuchend;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class ArbeitssuchendTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Arbeitssuchend();
    }

    protected function getStatusname(): string
    {
        return 'Arbeitssuchend';
    }

    protected function getStatusId(): int
    {
        return 20;
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