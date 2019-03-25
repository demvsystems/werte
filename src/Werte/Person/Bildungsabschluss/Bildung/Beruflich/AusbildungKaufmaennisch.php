<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Ausbildung
 * @package Demv\Werte\Person\Bildung\Bildung\Beruflich
 */
final class AusbildungKaufmaennisch extends Value implements BildungsabschlussInterface
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'abgeschlossene Berufsausbildung kaufmänisch');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
