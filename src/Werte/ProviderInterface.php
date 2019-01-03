<?php

namespace Demv\Werte;

use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Interface ProviderInterface
 * @package Demv\Werte
 */
interface ProviderInterface
{
    /**
     * Gibt ein Array aller Werte zurück
     *
     * @return Value[]
     */
    public function getAll(): array;

    /**
     * Liefert den Eintrag zu der übergebene ID zurück
     *
     * @param int $id
     *          Die ID, zu der der Eintrag zurückgegeben werden soll
     *
     * @return mixed
     *          Das Objekt
     * @throws EntryNotFoundException
     *
     */
    public function getOne(int $id);

    /**
     * Gibt zurück, ob der Eintrag mit der übergebenen ID existiert
     *
     * @param int $id
     *          ID, zu der der Eintrag gesucht werden soll
     *
     * @return bool
     *          true, wenn der Eintrag existiert, sonst false
     */
    public function exists(int $id): bool;
}
