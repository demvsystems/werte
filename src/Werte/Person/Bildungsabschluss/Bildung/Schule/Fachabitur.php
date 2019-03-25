<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Schule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Fachabitur
 * @package Demv\Werte\Person\Bildung\Bildung\Schule
 */
final class Fachabitur extends Value implements BildungsabschlussInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Fachabitur');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::SCHULE;
    }
}
