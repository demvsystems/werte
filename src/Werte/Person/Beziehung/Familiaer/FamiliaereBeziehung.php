<?php

namespace Demv\Werte\Person\Beziehung\Familiaer;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
use Demv\Werte\Value;

/**
 * Class FamiliaereBeziehung
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
class FamiliaereBeziehung extends Value implements BeziehungsTypInterface
{
    /**
     * @var boolean
     */
    private $lebenZusammen;

    /**
     * FamiliaereBeziehung constructor.
     *
     * @param int    $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        parent::__construct($id, $name);
        $this->lebenZusammen = false;
    }

    /**
     * @return bool
     */
    final public function isFamiliaer(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    final public function isBeruflich(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    final public function getLebenZusammen(): bool
    {
        return $this->lebenZusammen;
    }

    /**
     * @param bool $zusammenlebend
     */
    final public function setLebenZusammen(bool $zusammenlebend)
    {
        $this->lebenZusammen = $zusammenlebend;
    }
}