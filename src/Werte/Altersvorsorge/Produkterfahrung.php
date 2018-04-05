<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Produkterfahrung\KeineErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\VielErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\WenigErfahrung;

/**
 * Class Produkterfahrung
 * @package Demv\Werte\Altersvorsorge
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

    /**
     * @param int $id
     *
     * @return ProdukterfahrungInterface
     * @throws \Demv\Werte\Exception\EntryNotFoundException
     */
    public function getOne(int $id): ProdukterfahrungInterface
    {
        return parent::getOne($id);
    }
}
