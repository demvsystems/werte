<?php

namespace Demv\Werte\Betrag;

/**
 * Interface BetragInterface
 * @package Demv\Werte\Betrag
 */
interface BetragInterface
{
    /**
     * @return float
     */
    public function getAmount(): float;

    /**
     * @return bool
     */
    public function isPositive(): bool;

    /**
     * @return bool
     */
    public function isNegative(): bool;

    /**
     * @return string
     */
    public function asText(): string;
}