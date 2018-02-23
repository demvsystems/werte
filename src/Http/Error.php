<?php

namespace Demv\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Error
 * @package App\Kunde\Response
 */
final class Error extends AbstractStatusResponse
{
    /**
     * Error constructor.
     *
     * @param int   $code
     * @param array $body
     */
    public function __construct(int $code, array $body)
    {
        parent::__construct($body);

        $this->code = $code;
    }

    /**
     * @return ResponseInterface
     */
    public function translateToHttp(): ResponseInterface
    {
        return JsonResponseFactory::error($this->code, $this->getContent());
    }

    /**
     * @return bool
     */
    public function isError(): bool
    {
        return true;
    }
}
