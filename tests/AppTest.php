<?php

namespace TravisPhpunit\Test;

use TravisPhpunit\App;

class AppTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $this->assertEquals(App::add(2, 2), 4);
    }
	
}