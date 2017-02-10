<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.01.17
 * Time: 10:52
 */
namespace Demv\Werte\Person\Anrede\Anreden;

use Demv\Werte\Person\Anrede\AnredeInterface;
use Demv\Werte\Value;

/**
 * Class Frau
 * @package Demv\Werte\Person\Anrede\Anreden
 */
final class Frau extends Value implements AnredeInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Frau');
    }

}