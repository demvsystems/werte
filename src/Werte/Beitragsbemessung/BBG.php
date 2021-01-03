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
    const JAEG = 64350;

    /**
     * Bemessungsgrenze für Kranken- und Pflegeversicherungen
     */
    const KRANKEN_UND_PFLEGE = 58050;

    /**
     * Bemessungsgrenze für die gesetzliche Rentenversicherung
     * Hier wird der Durchschnitt von West und Ost genommen
     */
    const GESETZLICHE_RENTE = (85200 + 80400) / 2;
}
