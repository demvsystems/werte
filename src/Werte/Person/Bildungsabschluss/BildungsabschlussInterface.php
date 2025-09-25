<?php

namespace Demv\Werte\Person\Bildungsabschluss;

use Demv\Werte\ValueInterface;

/**
 * Interface BildungsabschlussInterface
 * @package Demv\Werte\Person\Bildungsabschluss
 */
interface BildungsabschlussInterface extends ValueInterface
{
    /**
     * @return string
     */
    public function getBildungsGruppe(): string;
}
