<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class DiplomFachhochschule
 * @package Demv\Werte\Person\Bildung\Bildung\Hochschule
 */
final class DiplomFachhochschule extends Value implements BildungsabschlussInterface
{
    const ID = 17;

    public function __construct()
    {
        parent::__construct(self::ID, 'Diplom (Fachhochschule)');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
