<?php

namespace Unishop\Task;

use Unishop\Task\Data\Product;

class ProductsListsMatcher
{
    /**
     * @var Product[]
     */
    private array $sameA=[];

    /**
     * @var Product[]
     */
    private array $sameB=[];
    /**
     * @var Product[]
     */
    private array $onlyA = [];
    /**
     * @var Product[]
     */
    private array $onlyB = [];

    /**
     * @param Product[] $a
     * @param Product[] $b
     */
    public function match(array $a, array $b) : void{
        // TODO remove
        $this->sameA = [new Product(2, '345', 'Braškėz'),];

        // TODO
    }

    /**
     * @return Product[]
     */
    public function getSameA(): array
    {
        return $this->sameA;
    }

    /**
     * @return Product[]
     */
    public function getSameB(): array
    {
        return $this->sameB;
    }

    /**
     * @return Product[]
     */
    public function getOnlyA(): array
    {
        return $this->onlyA;
    }

    /**
     * @return Product[]
     */
    public function getOnlyB(): array
    {
        return $this->onlyB;
    }
}