<?php

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVon;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVonInhaber;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\Inhaber;
use Demv\Werte\Person\Beziehung\Familiaer\Eltern;
use Demv\Werte\Person\Beziehung\Familiaer\Enkel;
use Demv\Werte\Person\Beziehung\Familiaer\Geschwister;
use Demv\Werte\Person\Beziehung\Familiaer\Grosseltern;
use Demv\Werte\Person\Beziehung\Familiaer\Kind;
use Demv\Werte\Person\Beziehung\Familiaer\NeffeNichte;
use Demv\Werte\Person\Beziehung\Familiaer\OnkelTante;
use Demv\Werte\Person\Beziehung\Familiaer\Partner;
use Demv\Werte\Person\Beziehung\Familiaer\Schwager;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegereltern;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegerkind;

/**
 * Class Beziehungstypen
 * @package Demv\Werte\Person\Beziehung
 */
final class Beziehungstypen extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Partner());
        $this->appendMember(new Eltern());
        $this->appendMember(new Kind());
        $this->appendMember(new Arbeitgeber());
        $this->appendMember(new Arbeitnehmer());
        $this->appendMember(new Geschwister());
        $this->appendMember(new Schwager());
        $this->appendMember(new Grosseltern());
        $this->appendMember(new Enkel());
        $this->appendMember(new Geschaeftsfuehrer());
        $this->appendMember(new FirmaVon());
        $this->appendMember(new FirmaVonInhaber());
        $this->appendMember(new Inhaber());
        $this->appendMember(new OnkelTante());
        $this->appendMember(new NeffeNichte());
        $this->appendMember(new Schwiegereltern());
        $this->appendMember(new Schwiegerkind());
    }

    /**
     * @return BeziehungsTypInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return BeziehungsTypInterface
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }
}