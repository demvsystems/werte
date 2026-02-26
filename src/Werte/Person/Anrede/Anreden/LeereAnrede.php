<?php

namespace Demv\Werte\Person\Anrede\Anreden;

use Demv\Werte\Person\Anrede\AnredeInterface;
use Demv\Werte\Value;

/**
 * Class LeereAnrede
 * @package Demv\Werte\Person\Anrede\Anreden
 */
final class LeereAnrede extends Value implements AnredeInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, '');
    }

    public function getSlug(): string
    {
        return 'leere-anrede';
    }
}
