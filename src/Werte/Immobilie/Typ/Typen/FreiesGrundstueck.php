<?php
namespace Demv\Werte\Immobilie\Typ\Typen;

use Demv\Werte\Immobilie\Typ\ImmobilienTypInterface;
use Demv\Werte\Value;

/**
 * Class FreiesGrundstueck
 * @package Demv\Werte\Immobilie\Typ\Typen
 */
final class FreiesGrundstueck extends Value implements ImmobilienTypInterface
{
    const ID = 3;

    /**
     * FreiesGrundstueck constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Freies Grundstück');
    }
}