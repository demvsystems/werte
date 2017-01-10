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
     * @var array
     */
    private $members = [];

    /**
     * @param Value $member
     */
    final protected function appendMember(Value $member)
    {
        $this->members[] = $member;
    }

    /**
     * Gibt alle Einträge zurück
     * @return array
     */
    public function getAll(): array
    {
        return $this->members;
    }

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
    public function getOne(int $id)
    {
        $member = $this->fetchOne($id);
        if ($member !== null) {
            return $member;
        }
        throw new EntryNotFoundException(static::class, $id);
    }

    /**
     * @param $id
     *
     * @return mixed|null
     */
    protected function fetchOne($id)
    {
        foreach ($this->getAll() as $value) {
            if ($value->getId() === $id) {
                return $value;
            }
        }

        return null;
    }

    /**
     * Gibt zurück, ob der Eintrag mit der übergebenen ID existiert
     *
     * @param int $id
     *          ID, zu der der Eintrag gesucht werden soll
     *
     * @return bool
     *          true, wenn der Eintrag existiert, sonst false
     */
    public function exists(int $id): bool
    {
        return $this->fetchOne($id) !== null;
    }

}