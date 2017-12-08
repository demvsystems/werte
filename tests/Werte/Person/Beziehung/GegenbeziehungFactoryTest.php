<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.01.17
 * Time: 09:43
 */

namespace Demv\Werte\Tests\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Gegenbeziehung;
use Demv\Werte\Person\Beziehung\GegenbeziehungFactory;
use PHPUnit\Framework\TestCase;

class GegenbeziehungFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $this->assertInstanceOf(Gegenbeziehung::class, GegenbeziehungFactory::create());
    }
}