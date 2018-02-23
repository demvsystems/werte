<?php

namespace Demv\Werte\Sparte\Krankenversicherung;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\Beihilfe;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\FreieHeilfuersorge;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\GKV;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\PKV;

/**
 * Class Krankenversicherung
 * @package Demv\Werte\Sparte\Krankenversicherung
 */
final class Krankenversicherung extends AbstractProvider
{
    /**
     * Krankenversicherung constructor.
     */
    public function __construct()
    {
        $this->appendMember(new GKV());
        $this->appendMember(new PKV());
        $this->appendMember(new FreieHeilfuersorge());
        $this->appendMember(new Beihilfe());
    }

    /**
     * @return KrankenversicherungInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return KrankenversicherungInterface
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }
}
