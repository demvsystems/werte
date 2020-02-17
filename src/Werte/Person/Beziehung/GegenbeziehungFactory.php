<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.01.17
 * Time: 09:39
 */

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
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
use Demv\Werte\Person\Beziehung\Familiaer\PatenOnkelTante;
use Demv\Werte\Person\Beziehung\Familiaer\Patenkind;
use Demv\Werte\Person\Beziehung\Familiaer\Schwager;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegereltern;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegerkind;
use Demv\Werte\Person\Beziehung\Familiaer\Stiefelternteil;
use Demv\Werte\Person\Beziehung\Familiaer\Stiefkind;
use Demv\Werte\Person\Beziehung\Privat\Eigentuemergemeinschaft;
use Demv\Werte\Person\Beziehung\Privat\FreundBekannter;
use Demv\Werte\Person\Beziehung\Privat\MitgliedInEigentuemergemeinschaft;

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
        $pairs                                        = [];
        $pairs[Partner::ID]                           = Partner::ID;
        $pairs[Eltern::ID]                            = Kind::ID;
        $pairs[Arbeitgeber::ID]                       = Arbeitnehmer::ID;
        $pairs[Geschaeftsfuehrer::ID]                 = FirmaVon::ID;
        $pairs[Geschwister::ID]                       = Geschwister::ID;
        $pairs[Schwager::ID]                          = Schwager::ID;
        $pairs[Grosseltern::ID]                       = Enkel::ID;
        $pairs[Inhaber::ID]                           = FirmaVonInhaber::ID;
        $pairs[OnkelTante::ID]                        = NeffeNichte::ID;
        $pairs[Schwiegereltern::ID]                   = Schwiegerkind::ID;
        $pairs[ExPartner::ID]                         = ExPartner::ID;
        $pairs[FreundBekannter::ID]                   = FreundBekannter::ID;
        $pairs[MitgliedInEigentuemergemeinschaft::ID] = Eigentuemergemeinschaft::ID;
        $pairs[ExArbeitgeber::ID]                     = ExArbeitnehmer::ID;
        $pairs[Geschaeftspartner::ID]                 = Geschaeftspartner::ID;
        $pairs[Hauptgeschaeftsstelle::ID]             = Zweigstelle::ID;
        $pairs[Stiefelternteil::ID]                   = Stiefkind::ID;
        $pairs[PatenOnkelTante::ID]                       = Patenkind::ID;

        return $pairs;
    }
}
