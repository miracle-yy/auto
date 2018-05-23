<?php

use PHPUnit\Framework\TestCase;
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Compute.php';

class ComputeTest extends TestCase
{
    private $compute;
    protected function setUp(){
		$this->compute=new Compute();
	}
	
	public function testadd()
    {
        $expected = 4;
        $result=$this->compute->add(2,2);
        $this->assertEquals($expected, $result);
    }
	
	public function testsub()
    {
        $expected = 0;
        $result=$this->compute->sub(2,2);
        $this->assertEquals($expected, $result);
    }
	
	public function testmulti()
    {
        $expected = 6;
        $result=$this->compute->multi(2,3);
        $this->assertEquals($expected, $result);
    }
	
	public function testdivision()
    {
        $expected = 1;
        $result=$this->compute->division(2,2);
        $this->assertEquals($expected, $result);
    }
}