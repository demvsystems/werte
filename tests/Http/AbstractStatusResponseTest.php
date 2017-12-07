<?php

namespace Demv\Werte\Tests\Http;

use Demv\Http\AbstractStatusResponse;
use Demv\Http\Success;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class AbstractStatusResponseTest
 * @package Demv\Werte\Tests\Http
 */
final class AbstractStatusResponseTest extends TestCase
{
    /**
     * @param int   $code
     * @param array $body
     *
     * @return ResponseInterface
     */
    private function getResponse(int $code, array $body): ResponseInterface
    {
        $response        = $this->createMock(ResponseInterface::class);
        $streamInterface = $this->createMock(StreamInterface::class);
        $streamInterface->method('getContents')->willReturn(json_encode($body));

        $response->method('getStatusCode')->willReturn($code);
        $response->method('getBody')->willReturn($streamInterface);

        return $response;
    }

    public function testTranslateFromHttp(): void
    {
        $translated = AbstractStatusResponse::translateFromHttp(
            $this->getResponse(200, ['success' => true, 'content' => ['test1' => 'test2']]));
        $this->assertInstanceOf(Success::class, $translated);
        $this->assertEquals(200, $translated->getCode());
        $this->assertEquals(['test1' => 'test2'], $translated->getContent());
    }
}