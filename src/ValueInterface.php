<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 10:51
 */

namespace Demv\Werte;

/**
 * Interface ValueInterface
 * @package Demv\Werte
 */
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

    /**
     * @return bool
     */
    public function isNone(): bool;

    /**
     * @param int $id
     *
     * @return bool
     */
    public function is(int $id): bool;

    /**
     * @param int $id
     *
     * @return bool
     */
    public function isNot(int $id): bool;
}