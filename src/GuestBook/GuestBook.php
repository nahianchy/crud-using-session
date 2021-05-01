<?php

namespace App\GuestBook;

class GuestBook{

    public $Full_Name=null;
    public $comment=null;


    public function __construct($data)
    {

        if(array_key_exists('Full_Name',$data)){
            $this->Full_Name=$data['Full_Name'];
        }
        if(array_key_exists('comment',$data)){
            $this->comment=$data['comment'];

        } 
    }
}