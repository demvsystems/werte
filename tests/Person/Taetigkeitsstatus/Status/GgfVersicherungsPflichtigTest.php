<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 17:36
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\GgfVersicherungsPflichtig;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class GgfVersicherungsPflichtigTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new GgfVersicherungsPflichtig();
    }

    protected function getStatusname(): string
    {
        return 'Geschäftsführender Gesellschafter ohne Entgeltfortzahlung';
    }

    protected function getStatusId(): int
    {
        return 25;
    }

    protected function hasEntgeltfortzahlung(): bool
    {
        return false;
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