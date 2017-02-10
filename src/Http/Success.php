<?php

namespace Demv\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Success
 * @package App\Kunde\Response
 */
final class Success extends AbstractStatusResponse
{
    /**
     * Success constructor.
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
        return JsonResponseFactory::success($this->code, $this->getContent());
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return true;
    }
}