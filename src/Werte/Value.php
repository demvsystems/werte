<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:28
 */

namespace Demv\Werte;

/**
 * Class Value
 * @package Demv\Werte
 */
class Value implements ValueInterface
{
    use ValueTrait;

    /**
     * Value constructor.
     *
     * @param int    $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }
}
