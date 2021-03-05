<?php

namespace Demv\Werte\Kraftstoff;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Kraftstoff\Kraftstoffe\Benzin;
use Demv\Werte\Kraftstoff\Kraftstoffe\Diesel;
use Demv\Werte\Kraftstoff\Kraftstoffe\Elektro;
use Demv\Werte\Kraftstoff\Kraftstoffe\Gas;
use Demv\Werte\Kraftstoff\Kraftstoffe\Hybrid;
use Demv\Werte\ValueInterface;

final class Kraftstoffe extends AbstractProvider
{
    /**
     * Kraftstoffe constructor.
     */
    public function __construct()
    {
        $this->appendMember(new Benzin());
        $this->appendMember(new Diesel());
        $this->appendMember(new Elektro());
        $this->appendMember(new Gas());
        $this->appendMember(new Hybrid());
    }

    /**
     * @return KraftstoffInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id): KraftstoffInterface
    {
        return parent::getOne($id);
    }
}
