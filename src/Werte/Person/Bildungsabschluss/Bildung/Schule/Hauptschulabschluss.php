<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Schule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Hauptschulabschluss
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Schule
 */
final class Hauptschulabschluss extends Value implements BildungsabschlussInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Hauptschulabschluss');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::SCHULE;
    }
}
