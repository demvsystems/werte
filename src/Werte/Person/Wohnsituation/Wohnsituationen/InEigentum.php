<?php

namespace Demv\Werte\Person\Wohnsituation\Wohnsituationen;

use Demv\Werte\Person\Wohnsituation\WohnsituationInterface;
use Demv\Werte\Value;

/**
 * Class InEigentum
 * @package Demv\Werte\Person\Wohnsituation\Wohnsituationen
 */
final class InEigentum extends Value implements WohnsituationInterface
{
    const ID = 2;

    /**
     * InEigentum constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Eigentum');
    }
}