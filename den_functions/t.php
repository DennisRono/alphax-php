<?php
class Foo {
	public $a = "test try from dennis";
	public $b = "member function";

	function memfunction(){
		print 'Inside `memfunction()`';
	}
}
$foo = new Foo;


$element = 'memfunction';
print $foo->$element;
 ?>
