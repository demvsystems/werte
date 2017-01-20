<?php
/**
 * Created by PhpStorm.
 * User: Randy
 * Date: 20.01.2017
 * Time: 10:00
 */

namespace Demv\Werte;

/**
 * Class NoneValue
 * @package Demv\Werte
 */
final class NoneValue implements ValueInterface
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return PHP_INT_MIN;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return '';
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return true;
    }
}