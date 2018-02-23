<?php

namespace Demv\Werte\Hobby\Hobbies;

use Demv\Werte\Hobby\HobbyInterface;
use Demv\Werte\Value;

/**
 * Class Camping
 * @package Demv\Werte\Hobby\Hobbies
 */
final class Camping extends Value implements HobbyInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Camping');
    }
}
