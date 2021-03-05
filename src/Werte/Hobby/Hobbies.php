<?php

namespace Demv\Werte\Hobby;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Hobby\Hobbies\Camping;
use Demv\Werte\Hobby\Hobbies\Jagdsport;
use Demv\Werte\Hobby\Hobbies\Luftsport;
use Demv\Werte\Hobby\Hobbies\Wassersport;
use Demv\Werte\ValueInterface;

final class Hobbies extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Jagdsport());
        $this->appendMember(new Luftsport());
        $this->appendMember(new Wassersport());
        $this->appendMember(new Camping());
    }

    /**
     * @return HobbyInterface[]|ValueInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    public function getOne(int $id): HobbyInterface
    {
        return parent::getOne($id);
    }
}
