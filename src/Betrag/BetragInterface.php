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
     * @param float $amount
     *
     * @return bool
     */
    public function isGroesserAls(float $amount): bool;

    /**
     * @param float $amount
     *
     * @return bool
     */
    public function isGroesserOderGleich(float $amount): bool;

    /**
     * @param float $amount
     *
     * @return bool
     */
    public function isKleinerAls(float $amount): bool;

    /**
     * @param float $amount
     *
     * @return bool
     */
    public function isKleinerOderGleich(float $amount): bool;

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