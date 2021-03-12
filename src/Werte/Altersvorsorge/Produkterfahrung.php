<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Produkterfahrung\KeineErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\VielErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\WenigErfahrung;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\ValueInterface;

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
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): ProdukterfahrungInterface
    {
        return parent::getOne($id);
    }

    /**
     * @return ProdukterfahrungInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }
}
