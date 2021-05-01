<?php
include_once ($_SERVER['DOCUMENT_ROOT']. '/guest_book/config.php');

use App\GuestBook\GuestBook;

use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Utility;

session_start();

$guests = [];
if(array_key_exists('guest_book_data', $_SESSION)){
    $guests = unserialize($_SESSION['guest_book_data']);
}

if(Utility::isPosted()){
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);
    if(!$validatedData){
        header("location:form.php");
    }else{
        $guests[] = $validatedData;
        $_SESSION['guest_book_data'] =  serialize($guests); 
        if(array_key_exists('guest_book_data', $_SESSION)){
            echo "Data has been saved successfully. <a href='index.php'>Go to index.</a>";
        }else{
            echo "Data has not been saved";
        }
    }

}







