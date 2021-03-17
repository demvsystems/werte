<?php

namespace Demv\Werte\Betrag;

use Exception;

/**
 * Class Einkommen
 * @package Demv\Werte\Betrag
 */
final class Einkommen
{
    /**
     * @var BetragInterface
     */
    private $betrag;

    /**
     * Einkommen constructor.
     *
     * @param BetragInterface $betrag
     */
    public function __construct(BetragInterface $betrag)
    {
        if (!$betrag->isPositiv()) {
            throw new Exception('Der Betrag des Einkommens muss positiv sein');
        }

        $this->betrag = $betrag;
    }

    /**
     * @return BetragInterface
     */
    public function getBetrag(): BetragInterface
    {
        return $this->betrag;
    }
}
