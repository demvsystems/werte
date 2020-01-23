<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\AbstractProvider;

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
        $this->appendMember(new Themen\Berufsunfaehigkeit());
        $this->appendMember(new Themen\PrivateKrankenversicherung());
        $this->appendMember(new Themen\Risikoleben());
        $this->appendMember(new Themen\Altersvorsorge());
        $this->appendMember(new Themen\KVZStationaer());
        $this->appendMember(new Themen\Zahnzusatz());
        $this->appendMember(new Themen\Krankentagegeld());
        $this->appendMember(new Themen\Hausrat());
        $this->appendMember(new Themen\Kfz());
        $this->appendMember(new Themen\Pflegevorsorge());
        $this->appendMember(new Themen\Privathaftpflicht());
        $this->appendMember(new Themen\Rechtsschutz());
        $this->appendMember(new Themen\Unfallversicherung());
        $this->appendMember(new Themen\Wohngebaeude());
        $this->appendMember(new Themen\AmbulanteKrankenzusatzversicherung());
        $this->appendMember(new Themen\AuslandsKV());
        $this->appendMember(new Themen\Bauherren());
        $this->appendMember(new Themen\Camping());
        $this->appendMember(new Themen\DreadDisease());
        $this->appendMember(new Themen\Erwerbsunfaehigkeit());
        $this->appendMember(new Themen\Grundfaehigkeit());
        $this->appendMember(new Themen\Jagdhaftpflicht());
        $this->appendMember(new Themen\Luftfahrthaftpflicht());
        $this->appendMember(new Themen\Photovoltaik());
        $this->appendMember(new Themen\Tierhalterhaftpflicht());
    }
}
