<?php

declare(strict_types=1);

namespace GoldSpecDigital\ObjectOrientedOAS\Objects;

use GoldSpecDigital\ObjectOrientedOAS\Utilities\Arr;

/**
 * @property string|null $route
 * @property string|null $summary
 * @property string|null $description
 * @property \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation[]|null $operations
 * @property \GoldSpecDigital\ObjectOrientedOAS\Objects\Server[]|null $servers
 * @property \GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter[]|null $parameters
 */
class PathItem extends BaseObject
{
    /**
     * @var string|null
     */
    protected $route;

    /**
     * @var string|null
     */
    protected $summary;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation[]|null
     */
    protected $operations;

    /**
     * @var \GoldSpecDigital\ObjectOrientedOAS\Objects\Server[]|null
     */
    protected $servers;

    /**
     * @var \GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter[]|null
     */
    protected $parameters;

    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $objectId = null): self
    {
        return new static($objectId);
    }

    /**
     * @param string|null $route
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function route(?string $route): self
    {
        $instance = clone $this;

        $instance->route = $route;

        return $instance;
    }

    /**
     * @param string|null $summary
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function summary(?string $summary): self
    {
        $instance = clone $this;

        $instance->summary = $summary;

        return $instance;
    }

    /**
     * @param string|null $description
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function description(?string $description): self
    {
        $instance = clone $this;

        $instance->description = $description;

        return $instance;
    }

    /**
     * @param \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation[] $operations
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function operations(Operation ...$operations): self
    {
        $instance = clone $this;

        $instance->operations = $operations ?: null;

        return $instance;
    }

    /**
     * @param \GoldSpecDigital\ObjectOrientedOAS\Objects\Server[] $servers
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function servers(Server ...$servers): self
    {
        $instance = clone $this;

        $instance->servers = $servers ?: null;

        return $instance;
    }

    /**
     * @param \GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter[] $parameters
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function parameters(Parameter ...$parameters): self
    {
        $instance = clone $this;

        $instance->parameters = $parameters ?: null;

        return $instance;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $operations = [];
        foreach ($this->operations ?? [] as $operation) {
            $operations[$operation->action] = $operation->toArray();
        }

        return Arr::filter(
            array_merge($operations, [
                'summary' => $this->summary,
                'description' => $this->description,
                'servers' => $this->servers,
                'parameters' => $this->parameters,
            ])
        );
    }
}
