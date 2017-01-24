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
class NoneValue implements ValueInterface
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
    public function isSome(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return true;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function is(int $id): bool
    {
        return false;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function isNot(int $id): bool
    {
        return false;
    }
}