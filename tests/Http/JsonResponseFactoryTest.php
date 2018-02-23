<?php

namespace Demv\Werte\Tests\Http;

use Demv\Http\JsonResponseFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonResponseFactoryTest
 * @package Demv\Werte\Tests\Http
 */
final class JsonResponseFactoryTest extends TestCase
{
    public function testSuccess(): void
    {
        $response = JsonResponseFactory::success(200, ['daten1' => 'test1', 'daten2' => 5]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(json_encode([
                                            'success' => true,
                                            'content' => ['daten1' => 'test1', 'daten2' => 5]
                                        ]), $response->getBody()->getContents());
    }

    public function testFailed(): void
    {
        $response = JsonResponseFactory::failed(200, ['daten1' => 'test1', 'daten2' => 5]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(json_encode([
                                            'success' => false,
                                            'content' => ['daten1' => 'test1', 'daten2' => 5]
                                        ]), $response->getBody()->getContents());
    }

    public function testError(): void
    {
        $response = JsonResponseFactory::error(400, ['daten1' => 'test1', 'daten2' => 5]);
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertEquals(json_encode([
                                            'daten1' => 'test1',
                                            'daten2' => 5]), $response->getBody()->getContents());
    }
}
