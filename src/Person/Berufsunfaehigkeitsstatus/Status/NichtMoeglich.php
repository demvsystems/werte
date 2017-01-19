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

class NichtMoeglich extends Value implements BerufsunfaehigkeitsstatusInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'BU nicht Möglich');
    }

    /**
     * @inheritdoc
     */
    public function isBuAktuellMoeglich(): bool
    {
        return false;
    }

}