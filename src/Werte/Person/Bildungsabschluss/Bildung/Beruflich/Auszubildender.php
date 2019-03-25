<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Auszubildender
 * @package Demv\Werte\Person\Bildung\Bildung\Beruflich
 */
final class Auszubildender extends Value implements BildungsabschlussInterface
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'Auszubildender');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::BERUFLICH;
    }
}
