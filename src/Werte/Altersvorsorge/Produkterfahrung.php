<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Produkterfahrung\KeineErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\VielErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\WenigErfahrung;

/**
 * @extends AbstractProvider<ProdukterfahrungInterface>
 */
final class Produkterfahrung extends AbstractProvider
{
    /**
     * Produktwissen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new KeineErfahrung());
        $this->appendMember(new VielErfahrung());
        $this->appendMember(new WenigErfahrung());
    }
}
