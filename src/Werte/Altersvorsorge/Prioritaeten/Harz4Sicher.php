<?php

namespace Demv\Werte\Altersvorsorge\Prioritaeten;

use Demv\Werte\Altersvorsorge\PrioritaetenInterface;
use Demv\Werte\Value;

/**
 * Class Harz4Sicher
 * @package Demv\Werte\Altersvorsorge\Prioritaeten
 */
final class Harz4Sicher extends Value implements PrioritaetenInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anlage Harz IV sicher');
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return 'Die Anlage soll „Hartz IV“ sicher sein.';
    }
}
