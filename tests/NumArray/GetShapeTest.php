<?php
declare(strict_types=1);

namespace NumPHPTest\NumArray;

use NumPHP\NumArray;
use PHPUnit\Framework\TestCase;

class GetShapeTest extends TestCase
{
    public function testGetShape4()
    {
        $numArray = new NumArray([7, 4, 3, 4]);
        $this->assertSame([4], $numArray->getShape());
    }

    public function testGetShape2x3()
    {
        $numArray = new NumArray([
            [5, 4, 0],
            [2, 3, 7],
        ]);
        $this->assertSame([2, 3], $numArray->getShape());
    }
}
