<?php

namespace Demv\Werte\Hobby;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Hobby\Hobbies\Camping;
use Demv\Werte\Hobby\Hobbies\Jagdsport;
use Demv\Werte\Hobby\Hobbies\Luftsport;
use Demv\Werte\Hobby\Hobbies\Wassersport;

/**
 * @extends AbstractProvider<HobbyInterface>
 */
final class Hobbies extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Jagdsport());
        $this->appendMember(new Luftsport());
        $this->appendMember(new Wassersport());
        $this->appendMember(new Camping());
    }
}
