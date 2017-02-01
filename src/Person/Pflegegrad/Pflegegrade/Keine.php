<?php

namespace Demv\Werte\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Value;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;

/**
 * Class Keine
 * @package Demv\Werte\Person\Pflegegrad\Pflegegrade
 */
final class Keine extends Value implements PflegegradInterface
{
    /**
     * ID des Pflegegrades
     */
    const ID = 0;

    /**
     * Keine constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'keine');
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return 0;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return 12.5;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return 'Es besteht keine Beeinträchtigung der Selbständigkeit';
    }
}