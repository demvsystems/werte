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
    const JAEG = 69300;

    /**
     * Bemessungsgrenze für Kranken- und Pflegeversicherungen
     */
    const KRANKEN_UND_PFLEGE = 62100;

    /**
     * Bemessungsgrenze für die gesetzliche Rentenversicherung
     * Hier wird der Durchschnitt von West und Ost genommen
     */
    const GESETZLICHE_RENTE = ((7550 + 7450) * 12) / 2;
}
