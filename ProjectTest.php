<?php
/**
 * Copyright (c) 2017. Alexandr Kosarev (http://kosarev.by)
 */

/**
 * Created by Alexandr @ PhpStorm.
 * Date: 26.02.2017 15:52
 */

namespace System;

class ProjectTest extends \PHPUnit\Framework\TestCase
{

    public function testProjectCreation()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
