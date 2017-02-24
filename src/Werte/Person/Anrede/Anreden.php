<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:14
 */
namespace Demv\Werte\Person\Anrede;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Anrede\Anreden\Firma;
use Demv\Werte\Person\Anrede\Anreden\Frau;
use Demv\Werte\Person\Anrede\Anreden\Herr;
use Demv\Werte\Person\Anrede\Anreden\LeereAnrede;

/**
 * Class Anreden
 * @package Demv\Werte\Person\Anrede
 */
final class Anreden extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Herr());
        $this->appendMember(new Frau());
        $this->appendMember(new Firma());
        $this->appendMember(new LeereAnrede());
    }

    /**
     * @return AnredeInterface[]
     */
    public function getAll(): array
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     *
     * @return AnredeInterface
     */
    public function getOne(int $id)
    {
        return parent::getOne($id);
    }
}