<?php

declare(strict_types=1);

namespace GoldSpecDigital\ObjectOrientedOAS\Objects;

use GoldSpecDigital\ObjectOrientedOAS\Utilities\Arr;

/**
 * @property string|null $name
 * @property string|null $url
 */
class License extends BaseObject
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\License
     */
    public static function create(string $objectId = null): self
    {
        return new static($objectId);
    }

    /**
     * @param string|null $name
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\License
     */
    public function name(?string $name): self
    {
        $instance = clone $this;

        $instance->name = $name;

        return $instance;
    }

    /**
     * @param string|null $url
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\License
     */
    public function url(?string $url): self
    {
        $instance = clone $this;

        $instance->url = $url;

        return $instance;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return Arr::filter([
            'name' => $this->name,
            'url' => $this->url,
        ]);
    }
}
