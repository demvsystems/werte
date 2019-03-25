<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class ImStudium
 * @package Demv\Werte\Person\Bildung\Bildung\Hochschule
 */
final class ImStudium extends Value implements BildungsabschlussInterface
{
    const ID = 12;

    public function __construct()
    {
        parent::__construct(self::ID, 'im Studium');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
