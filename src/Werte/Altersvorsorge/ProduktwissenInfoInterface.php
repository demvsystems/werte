<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\ValueInterface;

/**
 * Interface ProduktwissenInfoInterface
 * @package Demv\Werte\Altersvorsorge
 */
interface ProduktwissenInfoInterface extends ValueInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;
}
