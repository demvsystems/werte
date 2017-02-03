<?php

namespace Demv\Werte;

use Demv\Werte\Exception\EntryNotFoundException;

/**
 * Class Ternary
 * @package Demv\Werte
 */
final class Ternary extends Value
{
    const YES     = 1;
    const NO      = 0;
    const UNKNOWN = -1;

    /**
     * @var array
     */
    private static $instances = [];

    /**
     * @var int
     */
    protected $id = self::UNKNOWN;

    /**
     * @param int $id
     *
     * @return Ternary
     * @throws EntryNotFoundException
     */
    private static function instance(int $id): self
    {
        if (empty(self::$instances)) {
            self::$instances[self::YES]     = new Ternary(self::YES, 'Ja');
            self::$instances[self::NO]      = new Ternary(self::NO, 'Nein');
            self::$instances[self::UNKNOWN] = new Ternary(self::UNKNOWN, 'Nicht gesetzt');
        }
        if (!array_key_exists($id, self::$instances)) {
            throw new EntryNotFoundException(self::class, $id);
        }

        return self::$instances[$id];
    }

    /**
     * @return Ternary
     */
    public static function yes(): self
    {
        return self::instance(self::YES);
    }

    /**
     * @return Ternary
     */
    public static function no(): self
    {
        return self::instance(self::NO);
    }

    /**
     * @return Ternary
     */
    public static function unknown(): self
    {
        return self::instance(self::UNKNOWN);
    }

    /**
     * @param int $value
     *
     * @return Ternary
     */
    public static function translate(int $value): self
    {
        switch ($value) {
            case self::NO:
                return self::no();
            case self::YES:
                return self::yes();
            default:
                return self::unknown();
        }
    }

    /**
     * @return bool
     */
    public function isYes(): bool
    {
        return $this->is(self::YES);
    }

    /**
     * @return bool
     */
    public function isNo(): bool
    {
        return $this->is(self::NO);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->is(self::UNKNOWN);
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->getId();
    }
}