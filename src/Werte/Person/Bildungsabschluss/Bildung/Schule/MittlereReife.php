<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Schule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class MittlereReife
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Schule
 */
final class MittlereReife extends Value implements BildungsabschlussInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mittlere Reife');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::SCHULE;
    }
}
