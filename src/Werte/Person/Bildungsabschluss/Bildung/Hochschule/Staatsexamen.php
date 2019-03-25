<?php

namespace Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule;

use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use Demv\Werte\Person\Bildungsabschluss\Bildungsgruppen;
use Demv\Werte\Value;

/**
 * Class Staatsexamen
 * @package Demv\Werte\Person\Bildung\Bildung\Hochschule
 */
final class Staatsexamen extends Value implements BildungsabschlussInterface
{
    const ID = 19;

    public function __construct()
    {
        parent::__construct(self::ID, 'Staatsexamen');
    }

    /**
     * @return string
     */
    public function getBildungsGruppe(): string
    {
        return Bildungsgruppen::HOCHSCHULE;
    }
}
