<?php

namespace Demv\Werte\Tests\Http;

use Demv\Http\Error;
use PHPUnit\Framework\TestCase;

/**
 * Class ErrorTest
 * @package Demv\Werte\Tests\Http
 */
final class ErrorTest extends TestCase
{
    /**
     * @param int   $code
     * @param array $body
     *
     * @return Error
     */
    private function getError(int $code, array $body): Error
    {
        return new Error($code, $body);
    }

    public function testIsSuccess(): void
    {
        $this->assertFalse($this->getError(400, [])->isSuccess());
    }

    public function testIsFail(): void
    {
        $this->assertFalse($this->getError(400, [])->isFail());
    }

    public function testIsError(): void
    {
        $this->assertTrue($this->getError(400, [])->isError());
    }

    public function testGetCode(): void
    {
        $this->assertEquals(400, $this->getError(400, [])->getCode());
        $this->assertEquals(401, $this->getError(401, [])->getCode());
        $this->assertEquals(403, $this->getError(403, [])->getCode());
    }

    public function testGetContent(): void
    {
        $this->assertEquals([], $this->getError(400, [])->getContent());
        $this->assertEquals([1 => 2], $this->getError(400, [1 => 2])->getContent());
        $this->assertEquals([1 => 2, 'test1' => 'abc'], $this->getError(400, [1 => 2, 'test1' => 'abc'])->getContent());
    }

    public function testTranslateToHttp(): void
    {
        $response = $this->getError(400, ['daten1' => 'test1', 'daten2' => 5])->translateToHttp();
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertEquals(json_encode(['daten1' => 'test1', 'daten2' => 5]), $response->getBody()->getContents());
    }
}
