<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 16:40
 */

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Tests\Person\Taetigkeitsstatus\Status\StatusTest;

final class SonstigeTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new Sonstige();
    }

    protected function getStatusname(): string
    {
        return 'Sonstige';
    }

    protected function getStatusId(): int
    {
        return 23;
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
