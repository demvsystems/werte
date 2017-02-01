<?php

namespace Demv\Werte\Betrag;

/**
 * Class Betrag
 * @package Demv\Werte\Betrag
 */
class Betrag implements BetragInterface
{
    /**
     * @var float
     */
    private $amount = 0.0;

    /**
     * Betrag constructor.
     *
     * @param float $amount
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    final public function getBetrag(): float
    {
        return $this->amount;
    }

    /**
     * @return bool
     */
    final public function isPositiv(): bool
    {
        return $this->amount >= 0;
    }

    /**
     * @return bool
     */
    final public function isNegativ(): bool
    {
        return $this->amount < 0;
    }

    /**
     * @return string
     */
    public function asText(): string
    {
        return number_format($this->amount, 2);
    }
}