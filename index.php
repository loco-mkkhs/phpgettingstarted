<?php
//your code goes here
// $myname="Loco mK";
// $finaloutput="My name is called".' '.$myname;
// echo $finaloutput;
// echo $finalouyput


//Arrays
// $students= array("Sheila","Caleb","Emmanuel","Virginia");
// echo $students [2];
// echo $count($student);

$programMarks = array(
    "Assinments" =>25,
    "CAT" => 20,
    "Atendance"=>8,
    "Projects"=>45
);
echo "CAT:" .$programMarks["CAT"];

//Mulitidimentional Arrays
$webTechnologies = array(
    'frontend' => array('HTML','ÇSS','JS','Bootstrap'),
    'backend'=> array('PHP','JS','Python','Java'),
    'databases' => array('mySQL','postgreSQL','mongoBD','firebase'),
);
echo $webTechnologies['frontend'][2];  //JS will be our output
echo $webTechnologies['backend'][0];
echo $webTechnologies['databases'][2]; 


?>