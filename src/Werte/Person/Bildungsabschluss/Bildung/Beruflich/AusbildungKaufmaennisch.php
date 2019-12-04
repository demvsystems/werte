<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class AusbildungKaufmaennisch
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich
 */
final class AusbildungKaufmaennisch extends Value implements BildungsabschlussInterface
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'abgeschlossene Berufsausbildung kaufmännisch');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
