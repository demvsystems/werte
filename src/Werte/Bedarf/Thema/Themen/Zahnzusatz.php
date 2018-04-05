<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateKrankenzusatzversicherung;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Zahnzusatz
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Zahnzusatz extends Bedarfsthema
{
    const ID = 6;

    /**
     * Zahnzusatz constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Zahnzusatz', [PrivateKrankenzusatzversicherung::DENTAL_ZAHN]);
    }
}
