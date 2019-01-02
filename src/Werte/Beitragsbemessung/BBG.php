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
    const JAEG = 60750;

    /**
     * Bemessungsgrenze für Kranken- und Pflegeversicherungen
     */
    const KRANKEN_UND_PFLEGE = 60750;

    /**
     * Bemessungsgrenze für die gesetzliche Rentenversicherung
     * Hier wird der Durchschnitt von West und Ost genommen
     */
    const GESETZLICHE_RENTE = (80400 + 73800) / 2;
}
