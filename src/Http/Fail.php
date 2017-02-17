<?php

namespace Demv\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Fail
 * @package App\Kunde\Response
 */
final class Fail extends AbstractStatusResponse
{
    /**
     * Fail constructor.
     *
     * @param array $body
     */
    public function __construct(array $body)
    {
        parent::__construct($body);

        $this->code = 200;
    }

    /**
     * @return ResponseInterface
     */
    public function translateToHttp(): ResponseInterface
    {
        return JsonResponseFactory::failed($this->code, $this->getContent());
    }

    /**
     * @return bool
     */
    public function isFail(): bool
    {
        return true;
    }
}