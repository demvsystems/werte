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
    public function getBetrag(): float;

    /**
     * @return bool
     */
    public function isPositiv(): bool;

    /**
     * @return bool
     */
    public function isNegativ(): bool;

    /**
     * @return string
     */
    public function asText(): string;
}