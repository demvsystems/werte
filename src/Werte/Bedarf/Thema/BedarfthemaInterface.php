<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\ValueInterface;

/**
 * Interface BedarfthemaInterface
 * @package Demv\Werte\Bedarf\Thema
 */
interface BedarfthemaInterface extends ValueInterface
{
    /**
     * @return array
     */
    public function getSpartenIds(): array;
}