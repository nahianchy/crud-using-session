<?php
session_start();
$guestPosition=$_GET['guestPosition'];

$guest_book_data= unserialize($_SESSION['guest_book_data']);


// echo "<pre>";

// print_r($guest_book_data);
// echo "</pre>";


unset($guest_book_data[$guestPosition]);


// echo "<pre>";

// print_r($guest_book_data);
// echo "</pre>";


$converted_string=serialize($guest_book_data);

$_SESSION['guest_book_data']=$converted_string;




if(array_key_exists('guest_book_data', $_SESSION)){
    header("location:index.php");
}else{
    echo "data has not saved in cookie";
}


