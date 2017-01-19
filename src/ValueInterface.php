<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 10:51
 */

namespace Demv\Werte;

interface ValueInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

}