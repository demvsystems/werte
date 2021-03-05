<?php

namespace Demv\Werte\Person\Bildungsabschluss;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AbschlussAlsMeister;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungHandwerk;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungKaufmaennisch;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungMitWeiterbildung;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\Auszubildender;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\BetriebswirtFachwirt;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\BachelorFachhochschule;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\BachelorUniversitaet;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\DiplomFachhochschule;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\DiplomMagister;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\ImStudium;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\MasterFachhochschule;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\MasterUniversitaet;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\Promotion;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\Staatsexamen;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\Abitur;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\Fachabitur;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\Hauptschulabschluss;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\KeinAbschluss;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\MittlereReife;
use Demv\Werte\ValueInterface;

class Bildungsabschluss extends AbstractProvider
{
    public function __construct()
    {
        $this->appendSchulMembers();
        $this->appendBeruflichMembers();
        $this->appendHochschuleMembers();
    }

    /**
     * @return BildungsabschlussInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id): BildungsabschlussInterface
    {
        return parent::getOne($id);
    }

    /**
     * @return BildungsabschlussInterface[]|ValueInterface[]
     */
    public function getBildungSchule(): array
    {
        return $this->getMembers(Bildungsgruppen::SCHULE);
    }

    /**
     * @return BildungsabschlussInterface[]|ValueInterface[]
     */
    public function getBildungBeruflich(): array
    {
        return $this->getMembers(Bildungsgruppen::BERUFLICH);
    }

    /**
     * @return BildungsabschlussInterface[]|ValueInterface[]
     */
    public function getBildungHochschule(): array
    {
        return $this->getMembers(Bildungsgruppen::HOCHSCHULE);
    }

    private function appendSchulMembers(): void
    {
        $this->appendMember(new KeinAbschluss());
        $this->appendMember(new Hauptschulabschluss());
        $this->appendMember(new MittlereReife());
        $this->appendMember(new Fachabitur());
        $this->appendMember(new Abitur());
    }

    private function appendBeruflichMembers(): void
    {
        $this->appendMember(new AusbildungKaufmaennisch());
        $this->appendMember(new AusbildungHandwerk());
        $this->appendMember(new AusbildungMitWeiterbildung());
        $this->appendMember(new Auszubildender());
        $this->appendMember(new AbschlussAlsMeister());
        $this->appendMember(new BetriebswirtFachwirt());
    }

    private function appendHochschuleMembers(): void
    {
        $this->appendMember(new ImStudium());
        $this->appendMember(new BachelorFachhochschule());
        $this->appendMember(new BachelorUniversitaet());
        $this->appendMember(new MasterFachhochschule());
        $this->appendMember(new MasterUniversitaet());
        $this->appendMember(new DiplomFachhochschule());
        $this->appendMember(new DiplomMagister());
        $this->appendMember(new Staatsexamen());
        $this->appendMember(new Promotion());
    }

    /**
     * @return BildungsabschlussInterface[]|ValueInterface[]
     */
    private function getMembers(string $gruppe): array
    {
        return array_filter(
            $this->getAll(),
            function ($bildung, $key) use ($gruppe) {
                /** @var BildungsabschlussInterface $bildung */
                return $bildung->getBildungsGruppe() === $gruppe;
            },
            ARRAY_FILTER_USE_BOTH);
    }
}
