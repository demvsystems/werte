<?php

namespace Demv\Werte\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use Demv\Werte\Value;

/**
 * Class Pflegegrad5
 * @package Demv\Werte\Person\Pflegegrad\Pflegegrade
 */
final class Pflegegrad5 extends Value implements PflegegradInterface
{
    /**
     * ID des Pflegegrades
     */
    const ID = 5;

    /**
     * Pflegegrad5 constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegegrad V');
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return 90;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return 100;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return 'Schwerste Beeinträchtigung der Selbstständigkeit mit besonderen Anforderungen an die pflegerische Versorgung';
    }
}
