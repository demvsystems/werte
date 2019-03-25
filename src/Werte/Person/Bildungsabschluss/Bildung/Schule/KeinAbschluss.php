<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Schule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class KeinAbschluss
 * @package Demv\Werte\Person\Bildung\Bildung
 */
final class KeinAbschluss extends Value implements BildungsabschlussInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kein Abschluss');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::SCHULE;
    }
}
