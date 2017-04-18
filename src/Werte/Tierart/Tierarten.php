<?php

namespace Demv\Werte\Tierart;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Tierart\Tierarten\Hund;
use Demv\Werte\Tierart\Tierarten\Pferd;

/**
 * Class Tierarten
 * @package Demv\Werte\Tierart
 */
final class Tierarten extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Hund());
        $this->appendMember(new Pferd());
    }

    /**
     * @return TierartInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return TierartInterface
     */
    public function getOne(int $id): TierartInterface
    {
        return parent::getOne($id);
    }
}