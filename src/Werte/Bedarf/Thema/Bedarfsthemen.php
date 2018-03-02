<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Bedarf\Thema\Themen\Altersvorsorge;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;
use Demv\Werte\Bedarf\Thema\Themen\RisikoLeben;
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
        $this->appendMember(new RisikoLeben());
        $this->appendMember(new Altersvorsorge());
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
