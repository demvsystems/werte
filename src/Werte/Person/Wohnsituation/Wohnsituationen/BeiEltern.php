<?php
namespace Demv\Werte\Person\Wohnsituation\Wohnsituationen;

use Demv\Werte\Person\Wohnsituation\WohnsituationInterface;
use Demv\Werte\Value;

/**
 * Class BeiEltern
 * @package Demv\Werte\Person\Wohnsituation\Wohnsituationen
 */
class BeiEltern extends Value implements WohnsituationInterface
{
    const ID = 3;

    /**
     * BeiEltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Bei Eltern');
    }
}