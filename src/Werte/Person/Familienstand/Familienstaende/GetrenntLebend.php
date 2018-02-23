<?php

namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class GetrenntLebend
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class GetrenntLebend extends Value implements FamilienstandInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Getrennt lebend');
    }
}
