<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class AusbildungMitWeiterbildung
 * @package Demv\Werte\Person\Bildung\Bildung\Beruflich
 */
final class AusbildungMitWeiterbildung extends Value implements BildungsabschlussInterface
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Berufsausbildung mit Weiterbildung');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
