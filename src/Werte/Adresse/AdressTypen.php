<?php

namespace Demv\Werte\Adresse;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Adresse\AdressTypen\Geschaeftlich;
use Demv\Werte\Adresse\AdressTypen\Privat;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class AdressTypen
 * @package Demv\Werte\Adresse
 */
final class AdressTypen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Privat());
        $this->appendMember(new Geschaeftlich());
    }

    /**
     * @param int $id
     *
     * @return AdressTypInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): AdressTypInterface
    {
        return parent::getOne($id);
    }
}