<?php

namespace Demv\Werte\Dokumente;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Dokumente\DokumentTypen\Antrag;
use Demv\Werte\Dokumente\DokumentTypen\Beratungsdokumentation;
use Demv\Werte\Dokumente\DokumentTypen\Angebot;
use Demv\Werte\Dokumente\DokumentTypen\Kuendigung;
use Demv\Werte\Dokumente\DokumentTypen\Leistungsuebersicht;
use Demv\Werte\Dokumente\DokumentTypen\Multidoc;
use Demv\Werte\Dokumente\DokumentTypen\Sepamandant;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class DokumentTypen
 * @package Demv\Werte\Dokumente
 */
final class DokumentTypen extends AbstractProvider
{

    /**
     * DokumentTypen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Angebot());
        $this->appendMember(new Antrag());
        $this->appendMember(new Beratungsdokumentation());
        $this->appendMember(new Leistungsuebersicht());
        $this->appendMember(new Kuendigung());
        $this->appendMember(new Sepamandant());
        $this->appendMember(new Multidoc());
    }

    /**
     * @param int $id
     *
     * @return DokumentTypInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): DokumentTypInterface
    {
        return parent::getOne($id);
    }
}
