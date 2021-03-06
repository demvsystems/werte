<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Produktwissen\Lebensversicherung;
use Demv\Werte\Altersvorsorge\Produktwissen\RentenversicherungAnsparphase;
use Demv\Werte\Altersvorsorge\Produktwissen\RentenversicherungAuszahlungsphase;
use Demv\Werte\Altersvorsorge\Produktwissen\TermfixLebensversicherung;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class Produktwissen
 * @package Demv\Werte\Altersvorsorge
 */
final class Produktwissen extends AbstractProvider
{
    /**
     * Produktwissen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Lebensversicherung());
        $this->appendMember(new RentenversicherungAnsparphase());
        $this->appendMember(new RentenversicherungAuszahlungsphase());
        $this->appendMember(new TermfixLebensversicherung());
    }

    /**
     * @param int $id
     *
     * @return ProduktwissenInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): ProduktwissenInterface
    {
        return parent::getOne($id);
    }

    /**
     * @return ProduktwissenInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }
}
