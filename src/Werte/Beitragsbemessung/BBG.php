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
    const JAEG = 59400;

    /**
     * Bemessungsgrenze für Kranken- und Pflegeversicherungen
     */
    const KRANKEN_UND_PFLEGE = 53100;

    /**
     * Bemessungsgrenze für die gesetzliche Rentenversicherung
     * Hier wird der Durchschnitt von West und Ost genommen
     */
    const GESETZLICHE_RENTE = (78000 + 69600) / 2;
}
