<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:20
 */
namespace Demv\Werte;

use Demv\Werte\Exception\EntryNotFoundException;

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
     * @param $id
     *          Die ID, zu der der Eintrag zurückgegeben werden soll
     *
     * @return Value
     *          Das Objekt
     * @throws EntryNotFoundException
     *
     */
    public function getOne($id): Value;

    /**
     * Gibt zurück, ob der Eintrag mit der übergebenen ID existiert
     *
     * @param $id
     *          ID, zu der der Eintrag gesucht werden soll
     *
     * @return bool
     *          true, wenn der Eintrag existiert, sonst false
     */
    public function exists($id): bool;

}