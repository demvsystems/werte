<?php

namespace Demv\Werte\Dokumente;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Dokumente\Dokumenttypen\Angebot;
use Demv\Werte\Dokumente\Dokumenttypen\Antrag;
use Demv\Werte\Dokumente\Dokumenttypen\Beratungsdokumentation;
use Demv\Werte\Dokumente\Dokumenttypen\Evb;
use Demv\Werte\Dokumente\Dokumenttypen\Kuendigung;
use Demv\Werte\Dokumente\Dokumenttypen\Leistungsuebersicht;
use Demv\Werte\Dokumente\Dokumenttypen\Produktinformationsblatt;
use Demv\Werte\Dokumente\Dokumenttypen\Schweigepflichtentbindung;
use Demv\Werte\Dokumente\Dokumenttypen\Sepamandant;
use Demv\Werte\Dokumente\Dokumenttypen\VVG;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class DokumentTypen
 * @package Demv\Werte\Dokumente
 */
final class Dokumenttypen extends AbstractProvider
{
    /**
     * DokumentTypen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Angebot());
        $this->appendMember(new Antrag());
        $this->appendMember(new Beratungsdokumentation());
        $this->appendMember(new Kuendigung());
        $this->appendMember(new Leistungsuebersicht());
        $this->appendMember(new Produktinformationsblatt());
        $this->appendMember(new Sepamandant());
        $this->appendMember(new VVG());
        $this->appendMember(new Evb());
        $this->appendMember(new Schweigepflichtentbindung());
    }

    /**
     * @param int $id
     *
     * @return DokumenttypInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): DokumenttypInterface
    {
        return parent::getOne($id);
    }
}
