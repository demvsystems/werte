<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 03.02.17
 * Time: 10:06
 */

namespace Demv\Werte;

/**
 * Class ValueTrait
 * @package Demv\Werte
 */
trait ValueTrait
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param ValueInterface $value
     *
     * @return bool
     */
    public function equals(ValueInterface $value): bool
    {
        return get_class($value) === static::class &&
               $this->getId() === $value->getId() &&
               $this->getName() === $value->getName();
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function is(int $id): bool
    {
        return $this->id === $id;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function isNot(int $id): bool
    {
        return !$this->is($id);
    }

    /**
     * @param string $class
     *
     * @return bool
     */
    private function hasSameClass(string $class): bool
    {
        return static::class === $class;
    }
}