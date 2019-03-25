<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Promotion
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule
 */
final class Promotion extends Value implements BildungsabschlussInterface
{
    const ID = 20;

    public function __construct()
    {
        parent::__construct(self::ID, 'Promotion');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
