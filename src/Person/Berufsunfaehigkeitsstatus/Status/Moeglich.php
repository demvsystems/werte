<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:00
 */
namespace Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status;

use Demv\Werte\Person\Berufsunfaehigkeitsstatus\BerufsunfaehigkeitsstatusInterface;
use Demv\Werte\Value;

class Moeglich extends Value implements BerufsunfaehigkeitsstatusInterface
{
    const ID = 0;

    public function __construct()
    {
        parent::__construct(self::ID, 'BU Möglich');
    }

    /**
     * @inheritdoc
     */
    public function isBuAktuellMoeglich(): bool
    {
        return true;
    }

}