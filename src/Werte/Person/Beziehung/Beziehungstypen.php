<?php

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\Berufsbetreuer;
use Demv\Werte\Person\Beziehung\Beruflich\Betreuter;
use Demv\Werte\Person\Beziehung\Beruflich\ExArbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\ExArbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVon;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVonInhaber;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftspartner;
use Demv\Werte\Person\Beziehung\Beruflich\Hauptgeschaeftsstelle;
use Demv\Werte\Person\Beziehung\Beruflich\Inhaber;
use Demv\Werte\Person\Beziehung\Beruflich\Zweigstelle;
use Demv\Werte\Person\Beziehung\Familiaer\Eltern;
use Demv\Werte\Person\Beziehung\Familiaer\Enkel;
use Demv\Werte\Person\Beziehung\Familiaer\ExPartner;
use Demv\Werte\Person\Beziehung\Familiaer\Geschwister;
use Demv\Werte\Person\Beziehung\Familiaer\Grosseltern;
use Demv\Werte\Person\Beziehung\Familiaer\Kind;
use Demv\Werte\Person\Beziehung\Familiaer\NeffeNichte;
use Demv\Werte\Person\Beziehung\Familiaer\OnkelTante;
use Demv\Werte\Person\Beziehung\Familiaer\Partner;
use Demv\Werte\Person\Beziehung\Familiaer\Patenkind;
use Demv\Werte\Person\Beziehung\Familiaer\PatenOnkelTante;
use Demv\Werte\Person\Beziehung\Familiaer\Schwager;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegereltern;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegerkind;
use Demv\Werte\Person\Beziehung\Familiaer\Stiefelternteil;
use Demv\Werte\Person\Beziehung\Familiaer\Stiefkind;
use Demv\Werte\Person\Beziehung\Privat\Eigentuemergemeinschaft;
use Demv\Werte\Person\Beziehung\Privat\FreundBekannter;
use Demv\Werte\Person\Beziehung\Privat\Mitbewohner;
use Demv\Werte\Person\Beziehung\Privat\MitgliedInEigentuemergemeinschaft;
use Demv\Werte\ValueInterface;

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
        $this->appendMember(new FreundBekannter());
        $this->appendMember(new ExPartner());
        $this->appendMember(new MitgliedInEigentuemergemeinschaft());
        $this->appendMember(new Eigentuemergemeinschaft());
        $this->appendMember(new ExArbeitgeber());
        $this->appendMember(new ExArbeitnehmer());
        $this->appendMember(new Geschaeftspartner());
        $this->appendMember(new Hauptgeschaeftsstelle());
        $this->appendMember(new Zweigstelle());
        $this->appendMember(new Stiefelternteil());
        $this->appendMember(new Stiefkind());
        $this->appendMember(new PatenOnkelTante());
        $this->appendMember(new Patenkind());
        $this->appendMember(new Mitbewohner());
        $this->appendMember(new Betreuter());
        $this->appendMember(new Berufsbetreuer());
    }

    /**
     * @return BeziehungsTypInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return BeziehungsTypInterface
     *
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): BeziehungsTypInterface
    {
        return parent::getOne($id);
    }
}
