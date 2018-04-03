<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\ValueInterface;

/**
 * Interface PrioritaetenInterface
 * @package Demv\Werte\Altersvorsorge
 */
interface PrioritaetenInterface extends ValueInterface
{
    /**
     * @return string
     */
    public function getStatement(): string;
}
