<?php

namespace Demv\Werte\Tests\Http;

use Demv\Http\Fail;
use PHPUnit\Framework\TestCase;

/**
 * Class FailTest
 * @package Demv\Werte\Tests\Http
 */
final class FailTest extends TestCase
{
    /**
     * @param array $body
     *
     * @return Fail
     */
    private function getFail(array $body): Fail
    {
        return new Fail($body);
    }

    public function testIsSuccess(): void
    {
        $this->assertFalse($this->getFail([])->isSuccess());
    }

    public function testIsFail(): void
    {
        $this->assertTrue($this->getFail([])->isFail());
    }

    public function testIsError(): void
    {
        $this->assertFalse($this->getFail([])->isError());
    }

    public function testGetCode(): void
    {
        $this->assertEquals(200, $this->getFail([])->getCode());
    }

    public function testGetContent(): void
    {
        $this->assertEquals([], $this->getFail([])->getContent());
        $this->assertEquals([1 => 2], $this->getFail([1 => 2])->getContent());
        $this->assertEquals([1 => 2, 'test1' => 'abc'], $this->getFail([1 => 2, 'test1' => 'abc'])->getContent());
    }

    public function testTranslateToHttp(): void
    {
        $response = $this->getFail(['daten1' => 'test1', 'daten2' => 5])->translateToHttp();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(
            json_encode(['success' => false, 'content' => ['daten1' => 'test1', 'daten2' => 5]]), $response->getBody()->getContents());
    }
}
