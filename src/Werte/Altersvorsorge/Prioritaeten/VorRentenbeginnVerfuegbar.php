<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class VorRentenbeginnVerfuegbar
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class VorRentenbeginnVerfuegbar extends Value implements PrioritaetenInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anlage vor Rentenbeginn verfuegbar');
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Vor Rentenbeginn soll die Option bestehen, das Kapital einmalig auszahlen zu lassen.';
    }
}
