<?php

namespace Demv\Werte\Sparte\Sparten;

/**
 * Class PrivateKrankenZusatzVersicherung
 * @package Demv\Werte\Sparte\Sparten
 */
interface PrivateKrankenZusatzVersicherung
{
    /**
     * 285    Krankenversicherung->Private Krankenzusatzversicherung->stationär
     */
    const STATIONAER = 285;

    /**
     * 284    Krankenversicherung->Private Krankenzusatzversicherung->ambulant
     */
    const AMBULANT = 284;

    /**
     * 286    Krankenversicherung->Private Krankenzusatzversicherung->dental/Zahn
     */
    const DENTAL_ZAHN = 286;
}