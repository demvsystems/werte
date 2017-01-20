<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:28
 */
namespace Demv\Werte;

/**
 * Class Value
 * @package Demv\Werte
 */
class Value implements ValueInterface
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
     * Value constructor.
     *
     * @param int    $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

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
     * @return bool
     */
    final public function isNone(): bool
    {
        return false;
    }

    /**
     * @param Value $value
     *
     * @return bool
     */
    public function equals(Value $value): bool
    {
        return $this->getId() === $value->getId();
    }
}