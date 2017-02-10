<?php

namespace Demv\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class StatusResponseInterface
 * @package App\Kunde\Response
 */
interface StatusResponseInterface
{
    /**
     * @return array
     */
    public function getContent(): array;

    /**
     * @return int
     */
    public function getCode(): int;

    /**
     * @return ResponseInterface
     */
    public function translateToHttp(): ResponseInterface;

    /**
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * @return bool
     */
    public function isFail(): bool;

    /**
     * @return bool
     */
    public function isError(): bool;
}