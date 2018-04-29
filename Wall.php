<?php
/**
*@shankar : This class is written to create and show wall.
*/
class Wall {
	protected $wallStartIndex;
	protected $wallLastIndex;
	public $startingWallXCoOrdinate=0;
	public $startingWallYCoOrdinate=0;
	public $lastWallXCoOrdinate=0;
	public $lastWallYCoOrdinate=0;
	public $cells=array();
	public function setWallIndex($wallStartIndex,$wallLastIndex){		
		$this->wallStartIndex=$wallStartIndex;
		$this->wallLastIndex=$wallLastIndex;
		$this->lastWallXCoOrdinate=$wallStartIndex - 1;
		$this->lastWallYCoOrdinate=$wallLastIndex - 1;		
		
	}
	public function createWallCells(){
		$result=array();		
		for($i=0;$i<$this->wallStartIndex;$i++){
			 for($j=0;$j<$this->wallLastIndex;$j++){				
				 $result[$i][$j]="E";
			}			
		 }		
		 $this->cells=$result;
	}
	public function getCells(){
		return $this->cells;
	}
	public function showWall(){
		$cells=$this->cells;
		krsort($cells);
		foreach($cells as $i=>$cls){
		 foreach($cls as $j=>$cl){	
			  echo $cells[$i][$j]." ";
		 }
		 echo "<br>";
		}
	}
}

?>