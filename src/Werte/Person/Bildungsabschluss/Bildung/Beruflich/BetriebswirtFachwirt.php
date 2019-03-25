<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class BetriebswirtFachwirt
 * @package Demv\Werte\Person\Bildung\Bildung\Beruflich
 */
final class BetriebswirtFachwirt extends Value implements BildungsabschlussInterface
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Betriebswirt / Fachwirt');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
