<?php

namespace Demv\Werte\Person\Beziehung\Familiaer;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
use Demv\Werte\Person\Beziehung\FamiliaereBeziehungInterface;
use Demv\Werte\Value;

/**
 * Class FamiliaereBeziehung
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
class FamiliaereBeziehung extends Value implements BeziehungsTypInterface, FamiliaereBeziehungInterface
{
    /**
     * @var boolean
     */
    private $zusammenlebend;

    /**
     * FamiliaereBeziehung constructor.
     *
     * @param int    $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        parent::__construct($id, $name);
        $this->zusammenlebend = false;
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
    final public function isZusammenlebend(): bool
    {
        return $this->zusammenlebend;
    }

    /**
     * @param bool $zusammenlebend
     */
    final public function setZusammenlebend(bool $zusammenlebend)
    {
        $this->zusammenlebend = $zusammenlebend;
    }
}