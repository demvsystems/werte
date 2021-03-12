<?php

namespace Demv\Werte\Person\Wohnsituation;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiAndererPerson;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiEltern;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\InEigentum;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\ZurMiete;
use Demv\Werte\ValueInterface;

/**
 * Class Wohnsituationen
 * @package Demv\Werte\Person\Wohnsituation
 */
final class Wohnsituationen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new ZurMiete());
        $this->appendMember(new InEigentum());
        $this->appendMember(new BeiEltern());
        $this->appendMember(new BeiAndererPerson());
    }

    /**
     * @return WohnsituationInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return WohnsituationInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): WohnsituationInterface
    {
        return parent::getOne($id);
    }
}
