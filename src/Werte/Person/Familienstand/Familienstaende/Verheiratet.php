<?php
namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class Verheiratet
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class Verheiratet extends Value implements FamilienstandInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Verheiratet');
    }
}