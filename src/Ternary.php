<?php

namespace Demv\Werte;

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
     * @param int    $id
     * @param string $name
     *
     * @return Ternary
     */
    private static function instance(int $id, string $name): self
    {
        if (!array_key_exists($id, self::$instances)) {
            self::$instances[$id] = new self($id, $name);
        }

        return self::$instances[$id];
    }

    /**
     * @return Ternary
     */
    public static function yes(): self
    {
        return self::instance(self::YES, 'Ja');
    }

    /**
     * @return Ternary
     */
    public static function no(): self
    {
        return self::instance(self::NO, 'Nein');
    }

    /**
     * @return Ternary
     */
    public static function unknown(): self
    {
        return self::instance(self::UNKNOWN, 'Nicht angegeben');
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