<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class MasterFachhochschule
 * @package Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule
 */
final class MasterFachhochschule extends Value implements BildungsabschlussInterface
{
    const ID = 15;

    public function __construct()
    {
        parent::__construct(self::ID, 'Master (Fachhochschule)');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
