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
    public function testNumbers()
    {
        $tests = array(
            array(
                'given'    => 10,
                'expected' => '10'
            ),
            array(
                'given'    => 100,
                'expected' => '100',
            ),
            array(
                'given'    => 1000,
                'expected' => '1k'
            ),
            array(
                'given'    => 10000,
                'expected' => '10k'
            ),
            array(
                'given'    => 100000,
                'expected' => '100k'
            ),
            array(
                'given'    => 1000000,
                'expected' => '1m'
            ),
            array(
                'given'    => 10000000,
                'expected' => '10m'
            ),
            array(
                'given'    => 100000000,
                'expected' => '100m'
            ),
            array(
                'given'    => 1000000000,
                'expected' => '1b'
            ),
            array(
                'given'    => 10000000000,
                'expected' => '10b'
            ),
            array(
                'given'    => 100000000000,
                'expected' => '100b'
            ),
            array(
                'given'    => 1000000000000,
                'expected' => '1t'
            ),
            array(
                'given'    => 10000000000000,
                'expected' => '10t'
            ),
            array(
                'given'    => 100000000000000,
                'expected' => '100t'
            ),
            array(
                'given'    => 1000000000000000,
                'expected' => '1000t'
            ),
        );

        foreach ($tests as $test) {
            $result = Humongous::wordify($test['given']);
            $this->assertEquals($test['expected'], $result);
        }
    }
}
