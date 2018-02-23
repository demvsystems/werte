<?php

namespace Demv\Werte\Betrag;

/**
 * Class Euro
 * @package Demv\Werte\Betrag
 */
final class Euro extends Betrag
{
    /**
     * @return string
     */
    public function asText(): string
    {
        return parent::asText() . ' €';
    }
}
