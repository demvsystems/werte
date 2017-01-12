<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:26
 */
namespace Demv\Werte\Person\Beziehung;

/**
 * Interface BeziehungsTypInterface
 * @package Demv\Werte\Person\Beziehung
 */
interface BeziehungsTypInterface
{
    /**
     * Gibt zurück, ob es sich um eine Familiäre Beziehung handelt
     * @return bool
     */
    public function isFamiliaer(): bool;

    /**
     * Gibt zurück, ob es sich um eine Berufliche Beziehung handelt
     * @return bool
     */
    public function isBeruflich(): bool;

    /**
     * Gibt den Namen der Beziehung zurück
     * @return string
     */
    public function getName(): string;

    /**
     * Gibt die ID der Beziehung zurück
     * @return int
     */
    public function getId(): int;

}