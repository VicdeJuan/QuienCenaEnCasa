<?php

$family = array_map('str_getcsv', file('data/family.csv'))[0];
//for ($i=1; $i <= 7; $i++) {}
$posibilities = array(0 => "M",1 => "D");
foreach ($family as $person) {
	foreach ($posibilities as $posibility) {
		$tow = $tow."$person;$posibility";
		for ($i=1; $i <=8 ; $i++) { 
			$idx = "$person"."-checkbox"."$posibility"."$i";
			$tow = $tow.";$_POST[$idx]";
		}
		$tow = $tow."\n";
	}
}

print_r($tow);

file_put_contents("data/data.csv",$tow);

//checkboxM1

//checkboxD1

?>