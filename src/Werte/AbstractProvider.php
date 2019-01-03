<?php

namespace Demv\Werte;

use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class AbstractProvider
 * @package Demv\Werte
 */
abstract class AbstractProvider implements ProviderInterface
{
    /**
     * @var array
     */
    private $members = [];

    /**
     * @param ValueInterface $member
     */
    final protected function appendMember(ValueInterface $member)
    {
        $this->members[$member->getId()] = $member;
    }

    /**
     * Gibt alle Einträge zurück
     * @return ValueInterface[]
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
        return isset($this->members[$id]) ? $this->members[$id] : null;
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
