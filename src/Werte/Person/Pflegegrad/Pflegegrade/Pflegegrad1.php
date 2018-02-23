<?php

namespace Demv\Werte\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use Demv\Werte\Value;

/**
 * Class Pflegegrad1
 * @package Demv\Werte\Person\Pflegegrad\Pflegegrade
 */
final class Pflegegrad1 extends Value implements PflegegradInterface
{
    /**
     * ID des Pflegegrades
     */
    const ID = 1;

    /**
     * Pflegegrad1 constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegegrad I');
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return 12.5;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return 27;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return 'Geringe Beeinträchtigung der Selbständigkeit';
    }
}
