<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class AusbildungHandwerk
 * @package Demv\Werte\Person\Bildung\Bildung\Beruflich
 */
final class AusbildungHandwerk extends Value implements BildungsabschlussInterface
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'abgeschlossene Berufsausbildung Handwerk / Industrie');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
