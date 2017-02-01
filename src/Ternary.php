<?php

namespace Demv\Werte;

/**
 * Class Ternary
 * @package Demv\Werte
 *
 * @see     https://de.wikipedia.org/wiki/Dreiwertige_Logik
 */
final class Ternary
{
    const YES     = 0;
    const NO      = 2;
    const UNKNOWN = 6;

    /**
     * @var array
     */
    private static $instances = [];
    /**
     * @var int
     */
    private $value = self::UNKNOWN;

    /**
     * Ternary constructor.
     *
     * @param int $value
     */
    private function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $value
     *
     * @return Ternary
     */
    private static function instance(int $value): self
    {
        if (!array_key_exists($value, self::$instances)) {
            self::$instances[$value] = new self($value);
        }

        return self::$instances[$value];
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
     * @return bool
     */
    public function is(int $value): bool
    {
        return $this->value === $value;
    }

    /**
     * @param int $value
     *
     * @return bool
     */
    public function isNot(int $value): bool
    {
        return $this->value !== $value;
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
     * @return Ternary
     */
    public function invert(): self
    {
        return self::instance((386 >> $this->value) & self::UNKNOWN);
    }
}