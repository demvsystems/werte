<?php

namespace Demv\Http;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseFactory
 * @package App\Kunde\Response
 */
final class JsonResponseFactory
{
    /**
     * @param int   $code
     * @param array $content
     *
     * @return ResponseInterface
     */
    public static function success(int $code, array $content): ResponseInterface
    {
        $body = ['success' => true, 'content' => $content];

        return new Response($code, self::getHeader(), json_encode($body));
    }

    /**
     * @param int   $code
     * @param array $content
     *
     * @return ResponseInterface
     */
    public static function failed(int $code, array $content): ResponseInterface
    {
        $body = ['success' => false, 'content' => $content];

        return new Response($code, self::getHeader(), json_encode($body));
    }

    /**
     * @param int   $code
     * @param array $body
     *
     * @return ResponseInterface
     */
    public static function error(int $code, array $body): ResponseInterface
    {
        return new Response($code, self::getHeader(), json_encode($body));
    }

    /**
     * @return array
     */
    private static function getHeader(): array
    {
        return [];
    }
}
