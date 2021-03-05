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
     * @param mixed[] $content
     */
    public static function success(int $code, array $content): ResponseInterface
    {
        $body = ['success' => true, 'content' => $content];

        return new Response($code, self::getHeader(), self::getJsonEncode($body));
    }

    /**
     * @param mixed[] $content
     */
    public static function failed(int $code, array $content): ResponseInterface
    {
        $body = ['success' => false, 'content' => $content];

        return new Response($code, self::getHeader(), self::getJsonEncode($body));
    }

    /**
     * @param mixed[] $body
     */
    public static function error(int $code, array $body): ResponseInterface
    {
        return new Response($code, self::getHeader(), self::getJsonEncode($body));
    }

    /**
     * @return array
     */
    private static function getHeader(): array
    {
        return [];
    }

    /**
     * @param mixed[] $body
     */
    private static function getJsonEncode(array $body): string
    {
        $json = json_encode($body);

        if ($json === false) {
            return '';
        }

        return $json;
    }
}
