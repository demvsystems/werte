<?php

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Beruflich\Angehoeriger;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\Aufsichtsrat;
use Demv\Werte\Person\Beziehung\Beruflich\Berufsbetreuer;
use Demv\Werte\Person\Beziehung\Beruflich\Betreuter;
use Demv\Werte\Person\Beziehung\Beruflich\ExArbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\ExArbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaAufsichtsrat;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVon;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVonGesellschafter;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVonInhaber;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVorstand;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftspartner;
use Demv\Werte\Person\Beziehung\Beruflich\Gesellschafter;
use Demv\Werte\Person\Beziehung\Beruflich\Hauptgeschaeftsstelle;
use Demv\Werte\Person\Beziehung\Beruflich\Hausverwaltung;
use Demv\Werte\Person\Beziehung\Beruflich\ImmobilienVerwaltetVon;
use Demv\Werte\Person\Beziehung\Beruflich\Inhaber;
use Demv\Werte\Person\Beziehung\Beruflich\InhaberGeschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\KommanditgesellschaftKommanditist;
use Demv\Werte\Person\Beziehung\Beruflich\KommanditgesellschaftKomplementaer;
use Demv\Werte\Person\Beziehung\Beruflich\Kommanditist;
use Demv\Werte\Person\Beziehung\Beruflich\Komplementaer;
use Demv\Werte\Person\Beziehung\Beruflich\Muttergesellschaft;
use Demv\Werte\Person\Beziehung\Beruflich\Tochtergesellschaft;
use Demv\Werte\Person\Beziehung\Beruflich\VorstandVonFirma;
use Demv\Werte\Person\Beziehung\Beruflich\Zweigstelle;
use Demv\Werte\Person\Beziehung\Familiaer\CousinCousine;
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
use Demv\Werte\Person\Beziehung\Privat\Generalbevollmaechtigter;
use Demv\Werte\Person\Beziehung\Privat\Mitbewohner;
use Demv\Werte\Person\Beziehung\Privat\MitgliedInEigentuemergemeinschaft;
use Demv\Werte\Person\Beziehung\Privat\Pflegeeltern;
use Demv\Werte\Person\Beziehung\Privat\Pflegekind;
use Demv\Werte\Person\Beziehung\Privat\Verein;
use Demv\Werte\Person\Beziehung\Privat\Vollmachtgeber;
use Demv\Werte\Person\Beziehung\Privat\VorstandVonVerein;

/**
 * Class GegenbeziehungFactory
 * @package Demv\Werte\Person\Beziehung
 */
final class GegenbeziehungFactory
{
    /**
     * @return Gegenbeziehung
     */
    public static function create(): Gegenbeziehung
    {
        return new Gegenbeziehung(self::getPairs());
    }

    /**
     * @return array
     */
    private static function getPairs(): array
    {
        return [
            Partner::ID                           => Partner::ID,
            Eltern::ID                            => Kind::ID,
            Arbeitgeber::ID                       => Arbeitnehmer::ID,
            Geschaeftsfuehrer::ID                 => FirmaVon::ID,
            Geschwister::ID                       => Geschwister::ID,
            Schwager::ID                          => Schwager::ID,
            Grosseltern::ID                       => Enkel::ID,
            Inhaber::ID                           => FirmaVonInhaber::ID,
            OnkelTante::ID                        => NeffeNichte::ID,
            Schwiegereltern::ID                   => Schwiegerkind::ID,
            FreundBekannter::ID                   => FreundBekannter::ID,
            ExPartner::ID                         => ExPartner::ID,
            MitgliedInEigentuemergemeinschaft::ID => Eigentuemergemeinschaft::ID,
            ExArbeitgeber::ID                     => ExArbeitnehmer::ID,
            Geschaeftspartner::ID                 => Geschaeftspartner::ID,
            Hauptgeschaeftsstelle::ID             => Zweigstelle::ID,
            Stiefelternteil::ID                   => Stiefkind::ID,
            PatenOnkelTante::ID                   => Patenkind::ID,
            Mitbewohner::ID                       => Mitbewohner::ID,
            Berufsbetreuer::ID                    => Betreuter::ID,
            VorstandVonVerein::ID                 => Verein::ID,
            Pflegeeltern::ID                      => Pflegekind::ID,
            Gesellschafter::ID                    => FirmaVonGesellschafter::ID,
            Hausverwaltung::ID                    => ImmobilienVerwaltetVon::ID,
            Muttergesellschaft::ID                => Tochtergesellschaft::ID,
            VorstandVonFirma::ID                  => FirmaVorstand::ID,
            Aufsichtsrat::ID                      => FirmaAufsichtsrat::ID,
            CousinCousine::ID                     => CousinCousine::ID,
            Komplementaer::ID                     => KommanditgesellschaftKomplementaer::ID,
            Kommanditist::ID                      => KommanditgesellschaftKommanditist::ID,
            Angehoeriger::ID                      => InhaberGeschaeftsfuehrer::ID,
            Generalbevollmaechtigter::ID          => Vollmachtgeber::ID
        ];
    }
}
