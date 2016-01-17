<?php

class ice_skate{
		
		var $laces;
		var $blade;
		var $rivets;
		var $boot;
		var $holders;
		var $tongue;
		var $toe;
		var $outsole;
		var $heel;
		var $achillesguard;

		function bauer($laces, $blade, $rivets, $boots, $holders, $tongue, $toe, $outsole, $heel, $achillesguard){
				$this->laces = $laces;
				$this->blade = $blade;
				$this->rivets = $rivets;
				$this->boots = $boots;
				$this->holders = $holders;
				$this->tongue = $tongue;
				$this->toe = $toe;
				$this->outsole = $outsole;
				$this->heel = $heel;
				$this->achillesguard = $achillesguard;

		function makeBauer(){
			$this->make();
			echo "It has a".$this->blade. "\n";
}
		function neededParts(){
			echo $this->boot. "needs".$this->holders. "\n";
} 		
		function assemblyTime(){
			for($i = 0; $i < $this->boot; $i++){
				if($i < 30){
					$assemblyTime++;
				}
				else if($i < 20){
					$assemblyTime = $assemblyTime + 2;
			}
				else if($i < 10){
					$assemblyTime = $assemblyTime + 3;
				}

				else{
					$assemblyTime = $assemblyTime +4;
}
}
echo "This skate will take you $assemblyTime to assemble. \n";

}
}
class skateInstructions{

		function howToBuild($t){
			if (!$t){
				$this->toe = false;
				echo "You skipped a step.\n";
}
			else{
				$this->toe = true;
				echo "Move on to next step\n";
}
}

}






$make = new ice_skate();
$make->assemblyTime();

$assemble = new skateInstructions();
$assemble->howToBuild(true);











?>