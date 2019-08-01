<?php
function addHash($psswd){
	$password = sha1($psswd);

	return $password;

}

function isEmpty(array $data){
	
	foreach ($data as $key => $value) {
		if (empty(trim($value))) {

		    return true;

		}
	}

	return false;

}
//limpa com base no valor passado do array
/*exemplo $_POST["NOME"] sanitize(["nome" => "s"(string)])*/
function sanitize(array $types) {
	
	foreach ($types as $key => $value) {
		switch ($value) {
			case 's':
					$_POST[$key] = preg_replace("/[^a-zA-Z]/", trim(' '),(string) addslashes(filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING)));
				break;
			
			case 'i':
					$_POST[$key] = preg_replace("/[^0-9]/", trim(' '),(int) addslashes(filter_input(INPUT_POST, $key, FILTER_SANITIZE_NUMBER_INT)));
				break;
			case 'e':
					$_POST[$key] = addslashes(filter_input(INPUT_POST, $key, FILTER_SANITIZE_EMAIL));
				break;		
			default:
					$_POST[$key] = addslashes($_POST[$key]);
					break;
 		}

	}
	return $_POST;


}
