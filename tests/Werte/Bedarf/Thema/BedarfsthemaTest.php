<?php

namespace Demv\Werte\Tests\Bedarf\Thema;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use PHPUnit\Framework\TestCase;

/**
 * Class BedarfsthemaTest
 * @package Demv\Werte\Tests\Bedarf\Thema
 */
final class BedarfsthemaTest extends TestCase
{
    public function testBedarfsthema()
    {
        $bedarfsthema = new Bedarfsthema(0, 'test', [99, 100]);
        $this->assertCount(2, $bedarfsthema->getSpartenIds());
    }
}
