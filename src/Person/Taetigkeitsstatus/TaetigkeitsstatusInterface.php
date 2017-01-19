<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 10:27
 */
namespace Demv\Werte\Person\Taetigkeitsstatus;

use Demv\Werte\ValueInterface;

interface TaetigkeitsstatusInterface extends ValueInterface
{

    /**
     * @return bool
     */
    public function isErwerbstaetig(): bool;

    /**
     * @return bool
     */
    public function isArbeitnehmer(): bool;

    /**
     * @return bool
     */
    public function hasEntgeltfortzahlung(): bool;
}