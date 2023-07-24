<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class AbgeschlosseneBerufsausbildungSonstige
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich
 */
final class AusbildungSonstige extends Value implements BildungsabschlussInterface
{
    const ID = 21;

    public function __construct()
    {
        parent::__construct(self::ID, 'abgeschlossene Berufsausbildung sonstige');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
