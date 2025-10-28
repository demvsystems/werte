<?php

namespace Demv\Werte;

use Demv\Werte\Exception\EntryNotFoundException;

/**
 * @template T of ValueInterface
 * @implements ProviderInterface<T>
 */
abstract class AbstractProvider implements ProviderInterface
{
    /**
     * @var array<T>
     */
    private $members = [];

    /**
     * @param T $member
     */
    final protected function appendMember(ValueInterface $member): void
    {
        $this->members[$member->getId()] = $member;
    }

    /**
     * Gibt alle Einträge zurück
     * @return T[]
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
     * @return T
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
     * @param int $id
     *
     * @return T|null
     */
    protected function fetchOne(int $id)
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
