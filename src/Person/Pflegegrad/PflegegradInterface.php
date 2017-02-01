<?php

namespace Demv\Werte\Person\Pflegegrad;

use Demv\Werte\ValueInterface;

/**
 * Interface PflegegradInterface
 * @package Demv\Werte\Person\Pflegegrad
 */
interface PflegegradInterface extends ValueInterface
{
    /**
     * minimale Grenze
     *
     * @return float
     */
    public function getMin(): float;

    /**
     * maximale Grenze
     *
     * @return float
     */
    public function getMax(): float;

    /**
     * hinweis
     *
     * @return string
     */
    public function getHinweis(): string;
}