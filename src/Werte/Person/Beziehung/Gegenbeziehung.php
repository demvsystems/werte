<?php

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\Exception\EntryNotFoundException;
use Exception;

/**
 * Class Gegenbeziehung
 * @package Demv\Werte\Person\Beziehung
 */
final class Gegenbeziehung
{
    /**
     * @var array
     */
    private $pairs = [];

    /**
     * Gegenbeziehung constructor.
     *
     * @param array $pairs
     */
    public function __construct(array $pairs)
    {
        $this->pairs = $pairs;
    }

    /**
     * @param BeziehungsTypInterface $beziehungsTyp
     *
     * @return BeziehungsTypInterface
     * @throws Exception
     */
    public function getFor(BeziehungsTypInterface $beziehungsTyp): BeziehungsTypInterface
    {
        $beziehungsTypen = new Beziehungstypen();
        foreach ($this->pairs as $key => $value) {
            if ($beziehungsTyp->getId() === $key) {
                return $beziehungsTypen->getOne($value);
            }
            if ($beziehungsTyp->getId() === $value) {
                return $beziehungsTypen->getOne($key);
            }
        }

        throw new EntryNotFoundException('Gegenbeziehung', $beziehungsTyp->getId());
    }

    /**
     * @param BeziehungsTypInterface $beziehungsTyp
     *
     * @return bool
     */
    public function existsFor(BeziehungsTypInterface $beziehungsTyp): bool
    {
        return array_key_exists($beziehungsTyp->getId(), $this->pairs) ||
               in_array($beziehungsTyp->getId(), array_values($this->pairs));
    }
}
