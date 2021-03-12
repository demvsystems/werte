<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Fondsgebunden;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Hybrid;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Klassisch;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\ValueInterface;

/**
 * Class ProduktwissenInfo
 * @package Demv\Werte\Altersvorsorge
 */
final class ProduktwissenInfo extends AbstractProvider
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

    /**
     * @param int $id
     *
     * @return ProduktwissenInfoInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): ProduktwissenInfoInterface
    {
        return parent::getOne($id);
    }

    /**
     * @return ProduktwissenInfoInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }
}
