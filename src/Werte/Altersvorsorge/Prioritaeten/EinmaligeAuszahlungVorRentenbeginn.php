<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class EinmaligeAuszahlungVorRentenbeginn
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class EinmaligeAuszahlungVorRentenbeginn extends Value implements PrioritaetenInterface
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Einmalige Auszahlung vor Rentenbeginn');
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Vor Rentenbeginn soll die Option bestehen, das Kapital einmalig auszahlen zu lassen.';
    }
}
