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
     * @param int $amount
     *
     * @return bool
     */
    public function isGroesserAls(int $amount): bool;

    /**
     * @param int $amount
     *
     * @return bool
     */
    public function isKleinerAls(int $amount): bool;

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