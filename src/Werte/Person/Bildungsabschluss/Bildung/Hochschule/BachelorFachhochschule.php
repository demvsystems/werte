<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class BachelorFachhochschule
 * @package Demv\Werte\Person\Bildung\Bildung\Hochschule
 */
final class BachelorFachhochschule extends Value implements BildungsabschlussInterface
{
    const ID = 13;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bachelor (Fachhochschule)');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
