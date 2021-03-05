<?php

namespace Demv\Werte\Sparte\Krankenversicherung;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\Beihilfe;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\FreieHeilfuersorge;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\GKV;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\PKV;
use Demv\Werte\ValueInterface;

final class Krankenversicherung extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new GKV());
        $this->appendMember(new PKV());
        $this->appendMember(new FreieHeilfuersorge());
        $this->appendMember(new Beihilfe());
    }

    /**
     * @return KrankenversicherungInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id): KrankenversicherungInterface
    {
        return parent::getOne($id);
    }
}
