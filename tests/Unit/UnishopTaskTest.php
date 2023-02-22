<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Unishop\Task\Data\Product;
use Unishop\Task\ProductsListsMatcher;

class UnishopTaskTest extends TestCase
{
    public function testMatch() {

        $a = [
            new Product(1, '123', 'Aguona'),
            new Product(2, '345', 'Braškė'),
            new Product(3, '678', 'Citrina'),
        ];

        $b = [
            new Product(102, '345', 'Strawberry'),
            new Product(103, '678', 'Lemon'),
            new Product(104, '901', 'Watermelon'),
        ];

        $productsListsMatcher = new ProductsListsMatcher();

        $productsListsMatcher->match($a, $b);

        $expectedSameA = [
            new Product(2, '345', 'Braškė'),
            new Product(3, '678', 'Citrina'),
        ];

        $this->assertEquals($expectedSameA, $productsListsMatcher->getSameA());
    }

    public function _testMatchFull() {

        $a = [
            new Product(1, '123', 'Aguona'),
            new Product(2, '345', 'Braškė'),
            new Product(3, '678', 'Citrina'),
        ];

        $b = [
            new Product(102, '345', 'Strawberry'),
            new Product(103, '678', 'Lemon'),
            new Product(104, '901', 'Watermelon'),
        ];

        $productsListsMatcher = new ProductsListsMatcher();

        $productsListsMatcher->match($a, $b);

        $expectedSameA = [
            new Product(2, '345', 'Braškė'),
            new Product(3, '678', 'Citrina'),
        ];

        $expectedSameB = [
            new Product(102, '345', 'Strawberry'),
            new Product(103, '678', 'Lemon'),
        ];

        $expectedOnlyA = [
            new Product(1, '123', 'Aguona'),
        ];

        $expectedOnlyB = [
            new Product(104, '901', 'Watermelon'),
        ];

        $this->assertEquals($expectedSameA, $productsListsMatcher->getSameA());
        $this->assertEquals($expectedSameB, $productsListsMatcher->getSameB());
        $this->assertEquals($expectedOnlyA, $productsListsMatcher->getOnlyA());
        $this->assertEquals($expectedOnlyB, $productsListsMatcher->getOnlyB());
    }
}