<?php
namespace phpUnitTutorial\Test;
class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
     public function testHTML()
     {
         $html = '<p id="my_id">ciao,Oao</p>';
         $matcher = array('id'=> 'my_id');
         $this->assertTag($matcher, $html);
     }
}


