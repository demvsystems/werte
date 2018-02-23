<?php

namespace Demv\Werte\Tests\Http;

use Demv\Http\Success;
use PHPUnit\Framework\TestCase;

/**
 * Class SuccessTest
 * @package Demv\Werte\Tests\Http
 */
final class SuccessTest extends TestCase
{
    /**
     * @param array $body
     *
     * @return Success
     */
    private function getSuccess(array $body): Success
    {
        return new Success($body);
    }

    public function testIsSuccess(): void
    {
        $this->assertTrue($this->getSuccess([])->isSuccess());
    }

    public function testIsFail(): void
    {
        $this->assertFalse($this->getSuccess([])->isFail());
    }

    public function testIsError(): void
    {
        $this->assertFalse($this->getSuccess([])->isError());
    }

    public function testGetCode(): void
    {
        $this->assertEquals(200, $this->getSuccess([])->getCode());
    }

    public function testGetContent(): void
    {
        $this->assertEquals([], $this->getSuccess([])->getContent());
        $this->assertEquals([1 => 2], $this->getSuccess([1 => 2])->getContent());
        $this->assertEquals([1 => 2, 'test1' => 'abc'], $this->getSuccess([1 => 2, 'test1' => 'abc'])->getContent());
    }

    public function testTranslateToHttp(): void
    {
        $response = $this->getSuccess(['daten1' => 'test1', 'daten2' => 5])->translateToHttp();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(json_encode([
                                            'success' => true,
                                            'content' => ['daten1' => 'test1', 'daten2' => 5]
                                        ]), $response->getBody()->getContents());
    }
}
