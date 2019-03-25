<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class BachelorUniversitaet
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule
 */
final class BachelorUniversitaet extends Value implements BildungsabschlussInterface
{
    const ID = 14;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bachelor (Universität)');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
