<?php

namespace Demv\Werte\Hobby;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Hobby\Hobbies\Camping;
use Demv\Werte\Hobby\Hobbies\Jagdsport;
use Demv\Werte\Hobby\Hobbies\Luftsport;
use Demv\Werte\Hobby\Hobbies\Wassersport;

/**
 * Class Hobbies
 * @package Demv\Werte\Hobby
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

    /**
     * @return HobbyInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return HobbyInterface
     */
    public function getOne(int $id): HobbyInterface
    {
        return parent::getOne($id);
    }
}
