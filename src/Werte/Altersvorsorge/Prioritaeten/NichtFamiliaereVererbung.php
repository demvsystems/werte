<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class NichtFamiliaereVererbung
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class NichtFamiliaereVererbung extends Value implements PrioritaetenInterface
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Vererbung auch nicht Familiaer möglich');
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Im Todesfall soll das angesparte Kapital auch außerhalb von Ehepartner oder Kindern vererbt werden.';
    }
}
