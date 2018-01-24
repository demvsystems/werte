<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;

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
     */
    public function getOne(int $id): BedarfthemaInterface
    {
        return parent::getOne($id);
    }
}