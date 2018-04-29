<?php

echo phpinfo(); exit;

require_once('Wall.php'); 
require_once('ColorMixing.php');
require_once('RobotMan.php');
$wallObject=New Wall();
$colorObject=New ColorMixing();
$wallObject->setWallIndex(5,5);
$wallObject->createWallCells();

//started with first robot
$robot=New RobotMan();
$robot->setRobotIndex(0,0,"N","R");	
//$robot->handleAction("L",$wallObject); //wronng move
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("R",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("l",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("l",$wallObject,$colorObject);
$robot->handleAction("R",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("l",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
//ended first robot action

//starting with second second robot
$robot=New RobotMan();
$robot->setRobotIndex(4,0,"N","G");
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("L",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("R",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("l",$wallObject,$colorObject);
$robot->handleAction("R",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("l",$wallObject,$colorObject);
$robot->handleAction("L",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("L",$wallObject,$colorObject);
$robot->handleAction("F",$wallObject,$colorObject);
$robot->handleAction("l",$wallObject,$colorObject);
//ended section robot action.		

//showing wall after color by robot.
$wallObject->showWall();
?>