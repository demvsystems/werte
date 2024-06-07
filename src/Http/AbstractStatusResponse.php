<?php

namespace Demv\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class AbstractStatusResponse
 * @package App\Kunde\Response
 */
abstract class AbstractStatusResponse implements StatusResponseInterface
{
    /** @var int */
    protected $code = 0;

    /** @var array<string, mixed> */
    private $content;

    /**
     * @param array<string, mixed> $body
     */
    public function __construct(array $body)
    {
        $this->content = $body;
    }

    final public function getCode(): int
    {
        return $this->code;
    }

    /** @return array<string, mixed> */
    final public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return StatusResponseInterface
     */
    public static function translateFromHttp(ResponseInterface $response): StatusResponseInterface
    {
        $code   = $response->getStatusCode();
        $stream = $response->getBody()->getContents();
        /** @var array{content: array, success: ?string} $body */
        $body   = json_decode($stream, true);

        if ($code >= 200 && $code < 300) {
            $content = !empty($body['content']) ? $body['content'] : [];

            return (bool) $body['success'] ? new Success($content) : new Fail($content);
        }

        return new Error($code, $body);
    }

    public function isSuccess(): bool
    {
        return false;
    }

    public function isFail(): bool
    {
        return false;
    }

    public function isError(): bool
    {
        return false;
    }
}
