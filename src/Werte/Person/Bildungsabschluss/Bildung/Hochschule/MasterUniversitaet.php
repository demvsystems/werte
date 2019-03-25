<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class MasterUniversitaet
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule
 */
final class MasterUniversitaet extends Value implements BildungsabschlussInterface
{
    const ID = 16;

    public function __construct()
    {
        parent::__construct(self::ID, 'Master (Universität)');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
