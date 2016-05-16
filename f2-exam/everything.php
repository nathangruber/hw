<?php

class One{
	public $a;
	public $b;
	function __construct($letters_1, $letters_2){
		$this->a = $letters_1;
		$this->b = $letters_2;
  }
    
  public function printEverthing(){
        echo $this->a.",".$this->b;	
	}


}
class Two extends One{
	public $c;
	public $d;
	function __construct($letters_1, $letters_2, $letters_3, $letters_4){
		$this->a = $letters_1;
		$this->b = $letters_2;
		$this->c = $letters_3;
		$this->d = $letters_4;
	}
	public function printEverthing(){
	       echo $this->a.",".$this->b.",".$this->c.",".$this->d;
	}


}
class Three extends Two{
	public $e;
	public $f;
	function __construct($letters_1, $letters_2, $letters_3, $letters_4, $letters_5, $letters_6){
		$this->a = $letters_1;
		$this->b = $letters_2;
		$this->c = $letters_3;
		$this->d = $letters_4;
    	$this->e = $letters_5;
		$this->f = $letters_6;
	}
	public function printEverthing(){
	         echo $this->a.",".$this->b.",".$this->c.",".$this->d.",".$this->e.",".$this->f;
	}


}



$object1 = new One("dog","cat".PHP_EOL);

$object2 = new Two("horse","pig","squirrel","monkey".PHP_EOL);

$object3 = new Three("woodchuck","mole","giraffe","shark","deer","robin");


$object1->printEverthing();
$object2->printEverthing();
$object3->printEverthing();
?>