<?php

namespace Demv\Werte\Sparte\Sparten;

/**
 * Interface Krankenversicherung
 * @package Demv\Werte\Sparte\Sparten
 */
interface Krankenversicherung
{
    const KRANKENTAGEGELD = 159;

    /**
     * 158    Krankenversicherung->Gesetzliche Krankenversicherung
     */
    const GESETZLICHE_KRANKENVERSICHERUNG = 158;

    /**
     * 156    Krankenversicherung->Private Krankenvollversicherung
     */
    const PRIVATE_KRANKENVOLLVERSICHERUNG = 156;

    /**
     * 368    Krankenversicherung->Freie Heilfürsorge
     */
    const FREIE_HEILFUERSORGE = 368;
}