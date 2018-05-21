<?php
include 'Compute.php';

Class ComputeDemo{
	public function add($a,$b){
		return $a+$b;
	}

	public function sub($a,$b){
		return $a-$b;
	}

	public function multi($a,$b){
		return $a*$b;
	}

	public function division($a,$b){
		return $a/$b;
	}
}

$compute=new Compute();
$compute->add(2,2);
$computedemo=new ComputeDemo();
$computedemo->sub(2,2);


