<?php

namespace Demv\Werte\Hobby\Hobbies;

use Demv\Werte\Hobby\HobbyInterface;
use Demv\Werte\Value;

/**
 * Class Luftsport
 * @package Demv\Werte\Hobby\Hobbies
 */
final class Luftsport extends Value implements HobbyInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Luftsport');
    }
}
