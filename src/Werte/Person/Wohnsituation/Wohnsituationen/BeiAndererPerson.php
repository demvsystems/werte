<?php

namespace Demv\Werte\Person\Wohnsituation\Wohnsituationen;

use Demv\Werte\Person\Wohnsituation\WohnsituationInterface;
use Demv\Werte\Value;

/**
 * Class BeiAndererPerson
 * @package Demv\Werte\Person\Wohnsituation\Wohnsituationen
 */
final class BeiAndererPerson extends Value implements WohnsituationInterface
{
    const ID = 4;

    /**
     * BeiEltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Bei anderer Person');
    }
}
