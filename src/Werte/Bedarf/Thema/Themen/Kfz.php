<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Kfz
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Kfz extends Bedarfsthema
{
    const ID = 14;

    /**
     * Kfz constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Kfz-Versicherung', [PrivateSachversicherung::KFZ]);
    }
}
