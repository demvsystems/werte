<?php

namespace Demv\Werte\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use Demv\Werte\Value;

/**
 * Class Pflegegrad3
 * @package Demv\Werte\Person\Pflegegrad\Pflegegrade
 */
final class Pflegegrad3 extends Value implements PflegegradInterface
{
    /**
     * ID des Pflegegrades
     */
    const ID = 3;

    /**
     * Pflegegrad3 constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegegrad III');
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return 47.5;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return 70;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return 'Schwere Beeinträchtigung der Selbständigkeit';
    }
}