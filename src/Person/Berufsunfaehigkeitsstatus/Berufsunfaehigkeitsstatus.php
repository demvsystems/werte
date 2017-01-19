<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 14:57
 */
namespace Demv\Werte\Person\Berufsunfaehigkeitsstatus;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\Moeglich;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\NichtMoeglich;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\ZeitweiseNichtMoeglich;

final class Berufsunfaehigkeitsstatus extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Moeglich());
        $this->appendMember(new NichtMoeglich());
        $this->appendMember(new ZeitweiseNichtMoeglich());
    }

    /**
     * @return BerufsunfaehigkeitsstatusInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return BerufsunfaehigkeitsstatusInterface
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }

}