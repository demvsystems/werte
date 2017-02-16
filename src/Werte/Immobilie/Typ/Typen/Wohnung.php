<?php
namespace Demv\Werte\Immobilie\Typ\Typen;

use Demv\Werte\Immobilie\Typ\ImmobilienTypInterface;
use Demv\Werte\Value;

/**
 * Class Wohnung
 * @package Demv\Werte\Immobilie\Typ\Typen
 */
class Wohnung extends Value implements ImmobilienTypInterface
{
    const ID = 2;

    /**
     * Wohnung constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Wohnung');
    }
}