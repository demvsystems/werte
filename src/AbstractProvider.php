<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:57
 */

namespace Demv\Werte;

use Demv\Werte\Exception\EntryNotFoundException;

abstract class AbstractProvider implements ProviderInterface
{
    /**
     * Liefert den Eintrag zu der übergebene ID zurück
     *
     * @param mixed $id
     *          Die ID, zu der der Eintrag zurückgegeben werden soll
     *
     * @return Value
     *          Das Objekt
     * @throws EntryNotFoundException
     *
     */
    public function getOne($id): Value
    {
        foreach ($this->getAll() as $value) {
            if ($value->getId() === $id) {
                return $value;
            }
        }
        throw new EntryNotFoundException(get_class($this), $id);
    }

    /**
     * Gibt zurück, ob der Eintrag mit der übergebenen ID existiert
     *
     * @param $id
     *          ID, zu der der Eintrag gesucht werden soll
     *
     * @return bool
     *          true, wenn der Eintrag existiert, sonst false
     */
    public function exists($id): bool
    {
        try {
            $this->getOne($id);

            return true;
        } catch (EntryNotFoundException $e) {
        }

        return false;
    }

}