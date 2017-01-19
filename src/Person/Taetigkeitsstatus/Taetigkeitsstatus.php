<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 10:49
 */

namespace Demv\Werte\Person\Taetigkeitsstatus;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Angestellter;
use Demv\Werte\Person\Taetigkeitsstatus\Status\AngestellterOeffentlDienst;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Arbeitssuchend;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufLebenszeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Berufsausbildung;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Elternzeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Erwerbsunfaehig;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Hausfrau;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Minijob;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Rentner;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Schulausbildung;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Selbststaendiger;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Sonstige;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Studium;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Vorstand;

class Taetigkeitsstatus extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Angestellter());
        $this->appendMember(new Selbststaendiger());
        $this->appendMember(new BeamterAufLebenszeit());
        $this->appendMember(new BeamterAufProbe());
        $this->appendMember(new AngestellterOeffentlDienst());
        $this->appendMember(new Vorstand());
        $this->appendMember(new Schulausbildung());
        $this->appendMember(new Berufsausbildung());
        $this->appendMember(new Studium());
        $this->appendMember(new Hausfrau());
        $this->appendMember(new Elternzeit());
        $this->appendMember(new Rentner());
        $this->appendMember(new Arbeitssuchend());
        $this->appendMember(new Erwerbsunfaehig());
        $this->appendMember(new Minijob());
        $this->appendMember(new Sonstige());
    }

    /**
     * @return TaetigkeitsstatusInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return TaetigkeitsstatusInterface
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }

}