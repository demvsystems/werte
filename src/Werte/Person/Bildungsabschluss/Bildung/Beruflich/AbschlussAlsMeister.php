<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class AbschlussAlsMeister
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich
 */
final class AbschlussAlsMeister extends Value implements BildungsabschlussInterface
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Abschluss als  Meister');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
