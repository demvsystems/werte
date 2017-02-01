<?php

namespace Demv\Werte\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use Demv\Werte\Value;

/**
 * Class Pflegegrad2
 * @package Demv\Werte\Person\Pflegegrad\Pflegegrade
 */
final class Pflegegrad2 extends Value implements PflegegradInterface
{
    /**
     * ID des Pflegegrades
     */
    const ID = 2;

    /**
     * Pflegegrad2 constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegegrad II');
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return 27;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return 47.5;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return 'Erhebliche Beeinträchtigung der Selbständigkeit';
    }
}