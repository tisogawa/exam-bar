<?php

use Exam\Service\Bar;

class BarTest extends PHPUnit_Framework_TestCase
{
    /** @var Bar */
    protected $instance;

    public function setup()
    {
        $this->instance = new Bar();
    }

    public function testDoSomething()
    {
        $this->assertEquals('Exam\Service\Bar::doSomething', $this->instance->doSomething());
    }
}
