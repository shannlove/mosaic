<?php
/***********
*@shankar : This class is written to perform action of Robot and set color of wall cells.
**************/
class RobotMan  {
	protected $action=array("L"=>"LeftTurn","R"=>"RightTurn","F"=>"MoveForward","l"=>"ColorHimself");
	protected $heading;
	protected $startingXIndex;
	protected $startingYIndex;
	protected $currentXIndex;
	protected $currentYIndex;
	protected $colorPicked;
	protected $move=true;
	protected $cardinalPoints=Array("E","W","N","S");
	protected $colorAvailable=array("E"=>'Empty',"R"=>'Red',"Y"=>'Yello',"G"=>'Green'); 
	public function setRobotIndex($startingXIndex,$startingYIndex,$heading,$colorPicked){
		$this->currentXIndex=$this->startingXIndex=$startingXIndex;
		$this->currentYIndex=$this->startingYIndex=$startingYIndex;
		$this->heading=$heading;
		$this->colorPicked=$colorPicked;
	}
	public function handleAction($input,$wallObject,$colorObject=false){
		
		if($this->action[$input]=='LeftTurn'){
			 if($this->heading=='N'){
				 $this->heading='W';
				if($this->currentXIndex==0 ){ // reverting to original
					$this->heading='N';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 elseif($this->heading=='S'){
				 $this->heading='E';
				 if($this->currentXIndex==$wallObject->lastWallXCoOrdinate ){ // reverting to original
					$this->heading='S';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 elseif($this->heading=='W'){
				 $this->heading='S';
				 if($this->currentYIndex==0 ){ // reverting to original
					$this->heading='W';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 elseif($this->heading=='E'){
				 $this->heading='N';
				 if($this->currentYIndex==$wallObject->lastWallYCoOrdinate ){ // reverting to original
					$this->heading='E';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 
		}
		elseif($this->action[$input]=='RightTurn'){
			 if($this->heading=='N'){
				 $this->heading='E';
				if($this->currentXIndex==$wallObject->lastWallXCoOrdinate ){ // reverting to original
					$this->heading='N';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 elseif($this->heading=='S'){
				 $this->heading='W';
				 if($this->currentXIndex==0 ){ // reverting to original
					$this->heading='S';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 elseif($this->heading=='E'){
				 $this->heading='S';
				 if($this->currentYIndex==0 ){ // reverting to original
					$this->heading='E';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
			 elseif($this->heading=='W'){
				 $this->heading='N';
				 if($this->currentYIndex==$wallObject->lastWallYCoOrdinate ){ // reverting to original
					$this->heading='W';
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			 }
		}
		elseif($this->action[$input]=='MoveForward'){
			if($this->heading=='N'){				
				$this->currentYIndex=$this->currentYIndex + 1;
				if($this->currentYIndex > $wallObject->lastWallYCoOrdinate){ //reverting to original
					$this->currentYIndex=$this->currentYIndex - 1;
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				} else{
					$this->move=true;
				}
			} 
			elseif($this->heading=='S'){				
				$this->currentYIndex=$this->currentYIndex - 1;
				if($this->currentYIndex<0 ){
					$this->currentYIndex=$this->currentYIndex + 1;
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			}
			elseif($this->heading=='E'){
				$this->currentXIndex=$this->currentXIndex + 1;	
				if($this->currentXIndex > $wallObject->lastWallXCoOrdinate){ //reverting to original
					$this->currentXIndex=$this->currentXIndex - 1;
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			}
			elseif($this->heading=='W'){
				$this->currentXIndex=$this->currentXIndex - 1;	
				if($this->currentXIndex<0 ){ // reverting to original
					$this->currentXIndex=$this->currentXIndex + 1;
					$this->move=false;
					echo "Wrong Move, revert to original!<br>";
				}else{
					$this->move=true;
				}
			}	
			/*if($this->move==false){
				echo "Robot return to original place,Move is Invalid!";
			}*/
		}
		elseif($this->action[$input]=='ColorHimself'){
			 $wallObject->cells[$this->currentXIndex][$this->currentYIndex]=$colorObject->getCellColorAfterMixing($wallObject->cells[$this->currentXIndex][$this->currentYIndex],$this->colorPicked);		 
			 
		}
	}
	
}

?>