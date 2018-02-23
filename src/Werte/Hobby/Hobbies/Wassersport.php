<?php

namespace Demv\Werte\Hobby\Hobbies;

use Demv\Werte\Hobby\HobbyInterface;
use Demv\Werte\Value;

/**
 * Class Wassersport
 * @package Demv\Werte\Hobby\Hobbies
 */
final class Wassersport extends Value implements HobbyInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Wassersport');
    }
}
