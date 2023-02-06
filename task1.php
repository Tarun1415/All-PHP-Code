<?php
                                           //create upper function
function upper($param){

// get query parameter
// get length of string
$length = strlen($param);
// check if the length is less than 2, then convert this to uppercase and print the string
if($length < 2) {
$upperCaseString = strtoupper($param);
echo $upperCaseString;
}

}

                         // create lower function 
function lower($param){
    
    $length = strlen($param);


if ($length >= 2 && false === strpos(trim($param), ' ')) {
/**
* check if the string is having length more than 2 and not having any space

* Then convert this to lower case and print the string
*/
$lowerCaseString = strtolower($param);
echo $lowerCaseString;
}
}

 function casestring($param){
        $length = strlen($param);

if ($length > 2 && strpos(trim($param), ' ') > 0) {
/**
* check if the string is having length more than 2 and having any space

* Then convert this to sentence case and print the string
*/
$sentenceCaseString = ucfirst(strtolower($param));
echo $sentenceCaseString;
}
}


function not($param){
            $length = strlen($param);

    if ($length < 0 ) {

            $length = strlen($param);
            
echo "Could not understand the string";
}

}



$param = isset($_GET['test']) ? $_GET['test'] : 'Tarun kumar';
                                            
upper($param);
lower($param);

casestring($param);
not($param);
?>

