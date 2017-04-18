<?php

namespace Demv\Werte\Hobby\Hobbies;

use Demv\Werte\Hobby\HobbyInterface;
use Demv\Werte\Value;

/**
 * Class Jagdsport
 * @package Demv\Werte\Hobby\Hobbies
 */
final class Jagdsport extends Value implements HobbyInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Jagdsport');
    }
}