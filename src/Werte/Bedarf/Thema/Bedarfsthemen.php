<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Selbststaendiger;
use Demv\Werte\Sparte\Sparten;
use ReflectionClass;
use ReflectionException;

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
        $this->appendMember(new Themen\Kinderinvaliditaet());
        $this->appendMember(new Themen\Funktionsinvaliditaet());
        $this->appendMember(new Themen\Berufshaftpflicht());
        $this->appendMember(new Themen\Geschaeftsinhaltsversicherung());
        $this->appendMember(new Themen\Vermoegensschadenhaftpflicht());
        $this->appendMember(new Themen\Betriebshaftpflicht());
        $this->appendMember(new Themen\D_O());
        $this->appendMember(new Themen\Firmenrechtsschutz());
        $this->appendMember(new Themen\GewerblicheGebaeudeversicherung());
        $this->appendMember(new Themen\Cyberversicherung());
    }


    /**
     * Filters registered bedarfsthemen including one or more Ids of a Sparte.
     * @param $sparteClasses
     * @return array
     */
    private function forSparten($sparteClasses): array
    {
        return array_reduce($sparteClasses, function ($carry, $sparteClass) {
            $themen = array_filter($this->getAll(), static function (BedarfthemaInterface $thema) use ($sparteClass) {
                try {
                    $refl = new ReflectionClass($sparteClass);
                    $intersection = array_intersect(
                        $thema->getSpartenIds(),
                        array_values($refl->getConstants())
                    );
                    return count($intersection) > 0;
                } catch (ReflectionException $ex) {
                    return false;
                }
            });
            return array_merge($carry, $themen);
        }, []);
    }

    /**
     * Returns Gewerbe Bedarfsthemen
     */
    public function forGewerbe(): array
    {
        return $this->forSparten([Sparten\Gewerbe::class]);
    }

    /**
     * Returns Taetigkeits Bedarfsthemen
     */
    public function forTaetigkeit(int $id)
    {
        $sparten = [
            Sparten\Krankenversicherung::class,
            Sparten\Krankenzusatzversicherung::class,
            Sparten\PrivateKrankenversicherung::class,
            Sparten\PrivateKrankenzusatzversicherung::class,
            Sparten\PrivateSachversicherung::class,
            Sparten\Privathaftpflicht::class,
            Sparten\RechtsschutzPrivat::class,
            Sparten\Unfallversicherung::class,
            Sparten\Vorsorge::class,
        ];

        if ($id === Selbststaendiger::ID) {
            $sparten[] = Sparten\Gewerbe::class;
        }

        return $this->forSparten($sparten);
    }
}
