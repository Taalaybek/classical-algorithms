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
use function algorithms\binary_search\binary_search;

class SearchingAlgorithmsTest extends TestCase
{
  
  /**
   * binary search algorithm
   * @test
   */
  public function testBinarySearch()
  {
    $this->assertNull(binary_search([0, 5, 2], 1));
    $this->assertEquals(0, binary_search([7], 7));
    $this->assertEquals(3, binary_search([4, 6, 2, 8], 8));
  }
  
}