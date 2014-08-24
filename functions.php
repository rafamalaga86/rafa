<?php


function random_greetings(){
	$num = rand(0,3);

	switch($num){
		case 0: $greetings = 'Hi';
			break;
		case 1: $greetings = 'Hello';
			break;
		case 2: $greetings = 'Hey';
			break;
		case 3: $greetings = 'Hola';
			break;
	}

	$greetings .= ' !';

	return $greetings;
}