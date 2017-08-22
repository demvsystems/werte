<?php

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class MitgliedInEigentümergemeinschaft
 * @package Demv\Werte\Person\Beziehung\Privat
 */
final class MitgliedInEigentuemergemeinschaft extends PrivateBeziehung
{
    const ID = 20;

    /**
     * FreundBekannter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Mitglied in Eigentümergemeinschaft');
    }
}