<?php

namespace Unishop\Task\Data;

class Product
{
    private int $id;
    private string $sku;
    private string $name;

    public function __construct(int $id, string $sku, string $name)
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getName(): string
    {
        return $this->name;
    }
}