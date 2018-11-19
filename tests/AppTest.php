<?php

namespace TravisPhpunit\Test;

use TravisPhpunit\App;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $this->assertEquals(App::add(2, 2), 4);
    }
	
}