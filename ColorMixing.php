<?php
/***
*@shankar : This class is written to get cell color on mixing of various color. I have not consider all the case, just work with Green,Red and Yellow. But we can go further to get various color on the basis of adding two or more color.
***/
class ColorMixing{
	protected $colorArr=array();
	protected $primaryColor=array(
		"Y"=>'Yellow',
		"B"=>'Blue',
		"R"=>'Red'
	);
	protected $secondaryColorCombination=array(
		"YB"=>'G',
		"RY"=>'O',
		"BR"=>'V'
	);
	protected $secondaryColor=array(
		"G"=>'Green',
		"O"=>'Orange ',
		"V"=>'Violet '
	);
	protected $tertiaryColor=array(
		"YG"=>'yellow-green',
		"BG"=>'blue-green ',
		"BV"=>'blue-violet ',
		"RV"=>'red-violet ',
		"RO"=>'red-orange ',
		"YO"=>'yellow-orange ',
	);
	public function getCellColorAfterMixing($cellColor,$colorPicked){
		$mixColor="";
		if($cellColor=="E"){
			$mixColor=$colorPicked;
		} else {
					if($cellColor=="R" && $colorPicked=="G"){
						$mixColor="Y";
					}
					elseif($cellColor=="G" && $colorPicked=="R"){
						$mixColor="Y";
					}
					elseif($cellColor=="Y" && $colorPicked=="R"){
						$mixColor="O";
					}
					elseif($cellColor=="Y" && $colorPicked=="G"){
						$mixColor="YG";
					} else{
						$mixColor=$cellColor;
					}
					
		}
		return $mixColor;
	}
}

?>