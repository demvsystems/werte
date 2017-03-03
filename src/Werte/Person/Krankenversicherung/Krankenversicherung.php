<?php

namespace Demv\Werte\Person\Krankenversicherung;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Krankenversicherung\Krankenversicherung\Beihilfe;
use Demv\Werte\Person\Krankenversicherung\Krankenversicherung\FreieHeilfuersorge;
use Demv\Werte\Person\Krankenversicherung\Krankenversicherung\GKV;
use Demv\Werte\Person\Krankenversicherung\Krankenversicherung\PKV;

/**
 * Class Krankenversicherung
 * @package Demv\Werte\Person\Krankenversicherung
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