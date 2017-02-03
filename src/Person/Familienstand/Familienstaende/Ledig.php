<?php
namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class Ledig
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class Ledig extends Value implements FamilienstandInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ledig');
    }
}