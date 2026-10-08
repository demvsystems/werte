<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Kundenfeld;

use Demv\Werte\ValueInterface;
use Demv\Werte\ValueTrait;

final class Kundenfeldtyp implements ValueInterface
{
    use ValueTrait;

    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }
}
