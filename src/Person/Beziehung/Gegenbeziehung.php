<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:45
 */

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVon;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Familiaer\Eltern;
use Demv\Werte\Person\Beziehung\Familiaer\Enkel;
use Demv\Werte\Person\Beziehung\Familiaer\Geschwister;
use Demv\Werte\Person\Beziehung\Familiaer\Grosseltern;
use Demv\Werte\Person\Beziehung\Familiaer\Kind;
use Demv\Werte\Person\Beziehung\Familiaer\Partner;
use Demv\Werte\Person\Beziehung\Familiaer\Schwager;
use Exception;

class Gegenbeziehung
{
    private $pairs = [];

    public function __construct()
    {
        $this->appendPair(Partner::ID, Partner::ID);
        $this->appendPair(Eltern::ID, Kind::ID);
        $this->appendPair(Arbeitgeber::ID, Arbeitnehmer::ID);
        $this->appendPair(Geschaeftsfuehrer::ID, FirmaVon::ID);
        $this->appendPair(Geschwister::ID, Geschwister::ID);
        $this->appendPair(Schwager::ID, Schwager::ID);
        $this->appendPair(Grosseltern::ID, Enkel::ID);
    }

    /**
     * @param int $firstId
     * @param int $secondId
     */
    private function appendPair(int $firstId, int $secondId)
    {
        $this->pairs[$firstId] = $secondId;
    }

    /**
     * @param BeziehungsTypInterface $beziehungsTyp
     *
     * @return mixed
     * @throws Exception
     */
    public function getFor(BeziehungsTypInterface $beziehungsTyp): BeziehungsTypInterface
    {
        $beziehungsTypen = new Beziehungstypen();
        foreach ($this->pairs as $key => $value) {
            if ($beziehungsTyp->getId() === $key) {
                return $beziehungsTypen->getOne($value);
            }
            if ($beziehungsTyp->getId() === $value) {
                return $beziehungsTypen->getOne($key);
            }
        }

        throw new Exception(sprintf('Für die Beziehung %s existiert keine Gegenbeziehung', $beziehungsTyp->getName()));
    }

    /**
     * @param BeziehungsTypInterface $beziehungsTyp
     *
     * @return bool
     */
    public function existsFor(BeziehungsTypInterface $beziehungsTyp): bool
    {
        return array_key_exists($beziehungsTyp->getId(), $this->pairs) ||
               in_array($beziehungsTyp->getId(), array_values($this->pairs));
    }
}