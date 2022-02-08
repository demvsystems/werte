<?php

namespace Demv\Werte\Person\Zielgruppe;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Aerzte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Angestellte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\AngestellteOeffentlicherDienst;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Auszubildende;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Beamte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Existenzgruender;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Familie;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\FreieBerufe;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Gesellschafter;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\HaeusleBauer;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Kinder;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Kuenstler;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Landwirte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Mediziner;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Piloten;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Ruhestaendler;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Schueler;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Selbstaendige;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\SelbstaendigeHandwerker;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\SoldatenPolizistenFeuerwehrleute;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Studenten;

final class Zielgruppe extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Selbstaendige());
        $this->appendMember(new Angestellte());
        $this->appendMember(new SelbstaendigeHandwerker());
        $this->appendMember(new Beamte());
        $this->appendMember(new SoldatenPolizistenFeuerwehrleute());
        $this->appendMember(new Piloten());
        $this->appendMember(new Existenzgruender());
        $this->appendMember(new Kuenstler());
        $this->appendMember(new Studenten());
        $this->appendMember(new Auszubildende());
        $this->appendMember(new Gesellschafter());
        $this->appendMember(new Aerzte());
        $this->appendMember(new AngestellteOeffentlicherDienst());
        $this->appendMember(new FreieBerufe());
        $this->appendMember(new Familie());
        $this->appendMember(new Ruhestaendler());
        $this->appendMember(new Kinder());
        $this->appendMember(new HaeusleBauer());
        $this->appendMember(new Mediziner());
        $this->appendMember(new Schueler());
        $this->appendMember(new Landwirte());
    }
}
