<?php

namespace Demv\Werte\Person\Anrede;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Anrede\Anreden\Firma;
use Demv\Werte\Person\Anrede\Anreden\Frau;
use Demv\Werte\Person\Anrede\Anreden\Herr;
use Demv\Werte\Person\Anrede\Anreden\LeereAnrede;
use Demv\Werte\ValueInterface;

final class Anreden extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Herr());
        $this->appendMember(new Frau());
        $this->appendMember(new Firma());
        $this->appendMember(new LeereAnrede());
    }

    /**
     * @return AnredeInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id):AnredeInterface
    {
        return parent::getOne($id);
    }
}
