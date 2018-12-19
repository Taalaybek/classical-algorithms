<?php
/*
 * This file is part of alexbowey/classical-algorithms.
 *
 * (c) Alex Bowey <alex.bowey@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use function algorithms\factorial\factorial;

class PartOneTest extends TestCase
{
    /**
     * @test
     */
    public function testFactorial()
    {
        $this->assertEquals(6, factorial(3));
        $this->assertEquals(1, factorial(1));
        $this->assertNull(factorial(0));
    }
}
