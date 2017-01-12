<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.01.17
 * Time: 16:00
 */

namespace Demv\Werte\Person\Anrede;

/**
 * Interface AnredeInterface
 * @package Demv\Werte\Person\Anrede
 */
interface AnredeInterface
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