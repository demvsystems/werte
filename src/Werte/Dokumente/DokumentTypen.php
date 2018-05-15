<?php

namespace Demv\Werte\Dokumente;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Dokumente\DokumentTypen\Antrag;
use Demv\Werte\Dokumente\DokumentTypen\Beratungsdokumentation;
use Demv\Werte\Dokumente\DokumentTypen\Erstantrag;
use Demv\Werte\Dokumente\DokumentTypen\Leistungsvergleich;
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
        $this->appendMember(new Erstantrag());
        $this->appendMember(new Antrag());
        $this->appendMember(new Beratungsdokumentation());
        $this->appendMember(new Leistungsvergleich());
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
