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
        $pairs                        = [];
        $pairs[Partner::ID]           = Partner::ID;
        $pairs[Eltern::ID]            = Kind::ID;
        $pairs[Arbeitgeber::ID]       = Arbeitnehmer::ID;
        $pairs[Geschaeftsfuehrer::ID] = FirmaVon::ID;
        $pairs[Geschwister::ID]       = Geschwister::ID;
        $pairs[Schwager::ID]          = Schwager::ID;
        $pairs[Grosseltern::ID]       = Enkel::ID;
        $pairs[Inhaber::ID]           = FirmaVonInhaber::ID;
        $pairs[OnkelTante::ID]        = NeffeNichte::ID;
        $pairs[Schwiegereltern::ID]   = Schwiegerkind::ID;

        return $pairs;
    }
}