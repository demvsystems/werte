<?php

namespace Demv\Werte\Altersvorsorge;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Altersvorsorge\Prioritaeten\ArbeitgeberUnabhaengig;
use Demv\Werte\Altersvorsorge\Prioritaeten\EinmaligeAuszahlungVorRentenbeginn;
use Demv\Werte\Altersvorsorge\Prioritaeten\FuerImmobilienerwerbVerfuegbar;
use Demv\Werte\Altersvorsorge\Prioritaeten\Harz4Sicher;
use Demv\Werte\Altersvorsorge\Prioritaeten\LebenslangeGarantierteRente;
use Demv\Werte\Altersvorsorge\Prioritaeten\NichtFamiliaereVererbung;
use Demv\Werte\Altersvorsorge\Prioritaeten\StaatlichFoerderbar;
use Demv\Werte\Altersvorsorge\Prioritaeten\VorRentenbeginnVerfuegbar;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class Prioritaeten
 * @package Demv\Werte\Altersvorsorge
 */
final class Prioritaeten extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new VorRentenbeginnVerfuegbar());
        $this->appendMember(new EinmaligeAuszahlungVorRentenbeginn());
        $this->appendMember(new FuerImmobilienerwerbVerfuegbar());
        $this->appendMember(new Harz4Sicher());
        $this->appendMember(new LebenslangeGarantierteRente());
        $this->appendMember(new NichtFamiliaereVererbung());
        $this->appendMember(new StaatlichFoerderbar());
        $this->appendMember(new ArbeitgeberUnabhaengig());
    }

    /**
     * @param int $id
     *
     * @return PrioritaetenInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): PrioritaetenInterface
    {
        return parent::getOne($id);
    }
}
