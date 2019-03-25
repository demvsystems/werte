<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class DiplomMagister
 * @package Demv\Werte\Person\Bildung\Bildung\Hochschule
 */
final class DiplomMagister extends Value implements BildungsabschlussInterface
{
    const ID = 18;

    public function __construct()
    {
        parent::__construct(self::ID, 'Diplom Mag.');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
