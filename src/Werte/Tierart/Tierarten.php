<?php

namespace Demv\Werte\Tierart;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Tierart\Tierarten\Hund;
use Demv\Werte\Tierart\Tierarten\Pferd;

/**
 * @extends AbstractProvider<TierartInterface>
 */
final class Tierarten extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Hund());
        $this->appendMember(new Pferd());
    }
}
