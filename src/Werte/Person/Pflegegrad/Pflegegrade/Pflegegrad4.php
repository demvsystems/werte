<?php

namespace Demv\Werte\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use Demv\Werte\Value;

/**
 * Class Pflegegrad4
 * @package Demv\Werte\Person\Pflegegrad\Pflegegrade
 */
final class Pflegegrad4 extends Value implements PflegegradInterface
{
    /**
     * ID des Pflegegrades
     */
    const ID = 4;

    /**
     * Pflegegrad4 constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegegrad IV');
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return 70;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return 90;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return 'Schwerste Beeinträchtigung der Selbständigkeit';
    }
}
