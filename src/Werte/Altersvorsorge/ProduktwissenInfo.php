<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Fondsgebunden;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Hybrid;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Klassisch;

/**
 * @extends AbstractProvider<ProduktwissenInfoInterface>
 */
class ProduktwissenInfo extends AbstractProvider
{
    /**
     * Produktwissen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Fondsgebunden());
        $this->appendMember(new Hybrid());
        $this->appendMember(new Klassisch());
    }
}
