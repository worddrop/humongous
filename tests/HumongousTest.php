<?php

/*
 * Copyright (c) Jeroen Visser <jeroenvisser101@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Humongous\tests;

use Humongous\Humongous;

class HumongousTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if all the shortners work.
     */
    public function testNumbers()
    {
        $tests = [
            [
                'given'    => 10,
                'expected' => '10'
            ],
            [
                'given'    => 100,
                'expected' => '100',
            ],
            [
                'given'    => 1000,
                'expected' => '1k'
            ],
            [
                'given'    => 10000,
                'expected' => '10k'
            ],
            [
                'given'    => 100000,
                'expected' => '100k'
            ],
            [
                'given'    => 1000000,
                'expected' => '1m'
            ],
            [
                'given'    => 10000000,
                'expected' => '10m'
            ],
            [
                'given'    => 100000000,
                'expected' => '100m'
            ],
            [
                'given'    => 1000000000,
                'expected' => '1b'
            ],
            [
                'given'    => 10000000000,
                'expected' => '10b'
            ],
            [
                'given'    => 100000000000,
                'expected' => '100b'
            ],
            [
                'given'    => 1000000000000,
                'expected' => '1t'
            ],
            [
                'given'    => 10000000000000,
                'expected' => '10t'
            ],
            [
                'given'    => 100000000000000,
                'expected' => '100t'
            ],
            [
                'given'    => 1000000000000000,
                'expected' => '1000t'
            ],
        ];

        foreach ($tests as $test) {
            $result = Humongous::parse($test['given']);
            $this->assertEquals($test['expected'], $result);
        }
    }
}
