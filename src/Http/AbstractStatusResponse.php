<?php

namespace Demv\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class AbstractStatusResponse
 * @package App\Kunde\Response
 */
abstract class AbstractStatusResponse implements StatusResponseInterface
{
    /**
     * @var int
     */
    protected $code = 0;
    /**
     * @var array
     */
    private $content = [];

    /**
     * AbstractStatusResponse constructor.
     *
     * @param array $body
     */
    public function __construct(array $body)
    {
        $this->content = $body;
    }

    /**
     * @return int
     */
    final public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return array
     */
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
        $code = $response->getStatusCode();
        $stream = $response->getBody()->getContents();
        $body = json_decode($stream);

        if ($code >= 200 && $code < 300) {
            return (bool) $body['success'] ? new Success($body['content']) : new Fail($body['content']);
        }

        return new Error($code, $body);
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isFail(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isError(): bool
    {
        return false;
    }
}