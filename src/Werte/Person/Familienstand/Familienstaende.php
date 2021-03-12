<?php

namespace Demv\Werte\Person\Familienstand;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Familienstand\Familienstaende\EingetrageneLebenspartnerschaft;
use Demv\Werte\Person\Familienstand\Familienstaende\Geschieden;
use Demv\Werte\Person\Familienstand\Familienstaende\GetrenntLebend;
use Demv\Werte\Person\Familienstand\Familienstaende\Lebensgemeinschaft;
use Demv\Werte\Person\Familienstand\Familienstaende\Ledig;
use Demv\Werte\Person\Familienstand\Familienstaende\Unbekannt;
use Demv\Werte\Person\Familienstand\Familienstaende\Verheiratet;
use Demv\Werte\Person\Familienstand\Familienstaende\Verwitwet;

/**
 * Class Familienstaende
 * @package Demv\Werte\Person\Familienstand
 */
class Familienstaende extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Ledig());
        $this->appendMember(new Verheiratet());
        $this->appendMember(new GetrenntLebend());
        $this->appendMember(new Geschieden());
        $this->appendMember(new Verwitwet());
        $this->appendMember(new Unbekannt());
        $this->appendMember(new EingetrageneLebenspartnerschaft());
        $this->appendMember(new Lebensgemeinschaft());
    }

    /**
     * @return FamilienstandInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return FamilienstandInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): FamilienstandInterface
    {
        return parent::getOne($id);
    }
}
