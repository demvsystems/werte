<?php

namespace Demv\Werte\Person\Wohnsituation;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiAndererPerson;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiEltern;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\InEigentum;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\ZurMiete;

/**
 * Class Wohnsituation
 * @package Demv\Werte\Person\Wohnsituation
 */
final class Wohnsituationen extends AbstractProvider
{
    /**
     * Wohnsituation constructor.
     */
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
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }
}