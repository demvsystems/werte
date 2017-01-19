<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 10:30
 */
namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

class AngestellterOeffentlDienst extends Value implements TaetigkeitsstatusInterface
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angestellter öffentl. Dienst');
    }

    /**
     * @inheritdoc
     */
    public function isErwerbstaetig(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isArbeitnehmer(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function hasEntgeltfortzahlung(): bool
    {
        return true;
    }

}