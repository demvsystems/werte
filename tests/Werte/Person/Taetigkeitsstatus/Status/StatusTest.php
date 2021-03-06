<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 11:40
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class StatusTest
 * @package Demv\Werte\Tests\Person\Taetigkeitsstatus
 */
abstract class StatusTest extends TestCase
{
    abstract protected function getTaetigkeitsstatus(): TaetigkeitsstatusInterface;

    abstract protected function getStatusname(): string;

    abstract protected function getStatusId(): int;

    abstract protected function hasEntgeltfortzahlung(): bool;

    abstract protected function isArbeitnehmer(): bool;

    abstract protected function isErwerbstaetig(): bool;

    public function testName(): void
    {
        $this->assertSame($this->getStatusname(), $this->getTaetigkeitsstatus()->getName());
    }

    public function testId(): void
    {
        $this->assertSame($this->getStatusId(), $this->getTaetigkeitsstatus()->getId());
    }

    public function testErwerbstaetig(): void
    {
        $this->assertSame($this->isErwerbstaetig(), $this->getTaetigkeitsstatus()->isErwerbstaetig());
    }

    public function testArbeitnehmer(): void
    {
        $this->assertSame($this->isArbeitnehmer(), $this->getTaetigkeitsstatus()->isArbeitnehmer());
    }

    public function testEntgeltfortzahlung(): void
    {
        $this->assertSame($this->hasEntgeltfortzahlung(), $this->getTaetigkeitsstatus()->hasEntgeltfortzahlung());
    }
}
