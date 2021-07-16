<?php

namespace Demv\Werte\Vorgang;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Vorgang\VorgangTypen\AntragEinreichen;
use Demv\Werte\Vorgang\VorgangTypen\Kuendigung;
use Demv\Werte\Vorgang\VorgangTypen\Risikovoranfrage;
use Demv\Werte\Vorgang\VorgangTypen\Schadenmeldung;

/**
 * Class Kraftstoffe
 * @package Demv\Werte\Vorgang
 */
final class VorgangTyp extends AbstractProvider
{
    /**
     * Kraftstoffe constructor.
     */
    public function __construct()
    {
        $this->appendMember(new AntragEinreichen());
        $this->appendMember(new Kuendigung());
        $this->appendMember(new Risikovoranfrage());
        $this->appendMember(new Schadenmeldung());
    }

    /**
     * @return VorgangTypInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return VorgangTypInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): VorgangTypInterface
    {
        return parent::getOne($id);
    }
}
