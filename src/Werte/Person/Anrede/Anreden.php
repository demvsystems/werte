<?php

namespace Demv\Werte\Person\Anrede;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Anrede\Anreden\Firma;
use Demv\Werte\Person\Anrede\Anreden\Frau;
use Demv\Werte\Person\Anrede\Anreden\Herr;
use Demv\Werte\Person\Anrede\Anreden\LeereAnrede;

/**
 * @extends AbstractProvider<AnredeInterface>
 */
final class Anreden extends AbstractProvider
{
    public function __construct()
    {
        $this->appendMember(new Herr());
        $this->appendMember(new Frau());
        $this->appendMember(new Firma());
        $this->appendMember(new LeereAnrede());
    }

    /**
     * @throws EntryNotFoundException
     */
    public function getSlug(int $id): string
    {
        return $this->getOne($id)->getSlug();
    }

    public static function tryFromSlug(string $slug): ?AnredeInterface
    {
        foreach ((new self())->getAll() as $anrede) {
            if ($anrede->getSlug() === $slug) {
                return $anrede;
            }
        }

        return null;
    }
}
