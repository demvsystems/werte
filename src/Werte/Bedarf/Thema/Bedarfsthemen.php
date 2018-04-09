<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Bedarf\Thema\Themen\Altersvorsorge;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\Hausrat;
use Demv\Werte\Bedarf\Thema\Themen\Kfz;
use Demv\Werte\Bedarf\Thema\Themen\Krankentagegeld;
use Demv\Werte\Bedarf\Thema\Themen\KVZStationaer;
use Demv\Werte\Bedarf\Thema\Themen\Pflegevorsorge;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;
use Demv\Werte\Bedarf\Thema\Themen\Privathaftpflicht;
use Demv\Werte\Bedarf\Thema\Themen\Rechtsschutz;
use Demv\Werte\Bedarf\Thema\Themen\Risikoleben;
use Demv\Werte\Bedarf\Thema\Themen\Unfallversicherung;
use Demv\Werte\Bedarf\Thema\Themen\Wohngebaeude;
use Demv\Werte\Bedarf\Thema\Themen\Zahnzusatz;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class Bedarfsthemen
 * @package Demv\Werte\Bedarf\Thema
 */
final class Bedarfsthemen extends AbstractProvider
{
    /**
     * Bedarfsthemen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Berufsunfaehigkeit());
        $this->appendMember(new PrivateKrankenversicherung());
        $this->appendMember(new Risikoleben());
        $this->appendMember(new Altersvorsorge());
        $this->appendMember(new KVZStationaer());
        $this->appendMember(new Zahnzusatz());
        $this->appendMember(new Krankentagegeld());
        $this->appendMember(new Hausrat());
        $this->appendMember(new Kfz());
        $this->appendMember(new Pflegevorsorge());
        $this->appendMember(new Privathaftpflicht());
        $this->appendMember(new Rechtsschutz());
        $this->appendMember(new Unfallversicherung());
        $this->appendMember(new Wohngebaeude());
    }

    /**
     * @return BedarfthemaInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return BedarfthemaInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): BedarfthemaInterface
    {
        return parent::getOne($id);
    }
}
