<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Schule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Abitur
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Schule
 */
final class Abitur extends Value implements BildungsabschlussInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Abitur');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::SCHULE;
    }
}
