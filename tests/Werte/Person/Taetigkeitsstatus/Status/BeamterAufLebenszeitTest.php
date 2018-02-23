<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 15:29
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufLebenszeit;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;

final class BeamterAufLebenszeitTest extends StatusTest
{
    protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface
    {
        return new BeamterAufLebenszeit();
    }

    protected function getStatusname(): string
    {
        return 'Beamter auf Lebenszeit';
    }

    protected function getStatusId(): int
    {
        return 5;
    }

    protected function hasEntgeltfortzahlung(): bool
    {
        return true;
    }

    protected function isArbeitnehmer(): bool
    {
        return false;
    }

    protected function isErwerbstaetig(): bool
    {
        return true;
    }
}
