<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Konservativ;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Risikoorientiert;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Sicherheitsorientiert;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Wachstumsorientiert;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class AnlegerOrientierungen
 * @package Demv\Werte\Altersvorsorge
 */
final class AnlegerOrientierungen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Sicherheitsorientiert());
        $this->appendMember(new Konservativ());
        $this->appendMember(new Wachstumsorientiert());
        $this->appendMember(new Risikoorientiert());
    }

    /**
     * @param int $id
     *
     * @return AnlegerOrientierungInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): AnlegerOrientierungInterface
    {
        return parent::getOne($id);
    }
}
