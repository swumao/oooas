<?php

declare(strict_types=1);

namespace GoldSpecDigital\ObjectOrientedOAS\Objects;

use GoldSpecDigital\ObjectOrientedOAS\Utilities\Arr;

/**
 * @property string|null $summary
 * @property string|null $description
 * @property mixed|null $value
 * @property string|null $externalValue
 */
class Example extends BaseObject
{
    /**
     * @var string|null
     */
    protected $summary;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var mixed|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $externalValue;

    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Example
     */
    public static function create(string $objectId = null): self
    {
        return new static($objectId);
    }

    /**
     * @param string|null $summary
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Example
     */
    public function summary(?string $summary): self
    {
        $instance = clone $this;

        $instance->summary = $summary;

        return $instance;
    }

    /**
     * @param string|null $description
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Example
     */
    public function description(?string $description): self
    {
        $instance = clone $this;

        $instance->description = $description;

        return $instance;
    }

    /**
     * @param mixed|null $value
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Example
     */
    public function value($value): self
    {
        $instance = clone $this;

        $instance->value = $value;

        return $instance;
    }

    /**
     * @param string|null $externalValue
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Example
     */
    public function externalValue(?string $externalValue): self
    {
        $instance = clone $this;

        $instance->externalValue = $externalValue;

        return $instance;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return Arr::filter([
            'summary' => $this->summary,
            'description' => $this->description,
            'value' => $this->value,
            'externalValue' => $this->externalValue,
        ]);
    }
}
