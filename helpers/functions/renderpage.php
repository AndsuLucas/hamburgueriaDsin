<?php

function render($name, $path){
    
  if (array_key_exists($name, $path)){
    $sanitized_page = (string) filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_STRING); 
    return $path[$sanitized_page];
    
  }

  return $path["home"];
  
  

}
function renderControlPage($name, $path){  
  
	$sanitized_page = (string) filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_STRING); 
  
  return $path[$sanitized_page];

}