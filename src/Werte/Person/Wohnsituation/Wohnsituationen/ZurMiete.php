<?php
namespace Demv\Werte\Person\Wohnsituation\Wohnsituationen;

use Demv\Werte\Person\Wohnsituation\WohnsituationInterface;
use Demv\Werte\Value;

/**
 * Class ZurMiete
 * @package Demv\Werte\Person\Wohnsituation\Wohnsituationen
 */
class ZurMiete extends Value implements WohnsituationInterface
{
    const ID = 1;

    /**
     * ZurMiete constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Zur Miete');
    }
}