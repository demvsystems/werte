<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Bedarf\Thema\Themen\Altersvorsorge;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\Krankentagegeld;
use Demv\Werte\Bedarf\Thema\Themen\KVZStationaer;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;
use Demv\Werte\Bedarf\Thema\Themen\Risikoleben;
use Demv\Werte\Bedarf\Thema\Themen\Zahnzusatz;
use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class Bedarfsthemen
 * @package Demv\Werte\Bedarf\Thema
 */
final class Bedarfsthemen extends AbstractProvider
{
    /**
     * Bedarfsthemen constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Berufsunfaehigkeit());
        $this->appendMember(new PrivateKrankenversicherung());
        $this->appendMember(new Risikoleben());
        $this->appendMember(new Altersvorsorge());
        $this->appendMember(new KVZStationaer());
        $this->appendMember(new Zahnzusatz());
        $this->appendMember(new Krankentagegeld());
    }

    /**
     * @return BedarfthemaInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return BedarfthemaInterface
     * @throws EntryNotFoundException
     */
    public function getOne(int $id): BedarfthemaInterface
    {
        return parent::getOne($id);
    }
}
