<?php

namespace Demv\Werte\Beitragsbemessung;

/**
 * Class BBG
 * @package Demv\Werte\Beitragsbemessung
 */
final class BBG
{
    /**
     * Versicherungspflichtgrenze
     */
    const JAEG = 66600;

    /**
     * Bemessungsgrenze für Kranken- und Pflegeversicherungen
     */
    const KRANKEN_UND_PFLEGE = 59850;

    /**
     * Bemessungsgrenze für die gesetzliche Rentenversicherung
     * Hier wird der Durchschnitt von West und Ost genommen
     */
    const GESETZLICHE_RENTE = ((7300 + 7100) * 12) / 2;
}
