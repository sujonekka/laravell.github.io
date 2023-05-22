<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class bookcontroller extends Controller
{
    private $books = array(
        array("author" => "Rabindranath Takur", "title" => "Choker bali"),
    array("author" => "Kazi Nazrul Islam", "title" => "Sindhu Hindol"),
    array("author" => "Bongkim Chandra", "title" => "Anodo mot"),
    array("author" => "Shakespeare", "title" => "Hamlet"),
    array("author" => "Jhon Keats", "title" => "Paradise lost"),

    );

    function books(){
        return $this->books;
    }

    function getbookid($id){

        $bookid = $id - 1;
        return $this->books[$bookid];

    }
    function getbooksfield($id, $field){
        $bookId = $id-1;

        $book =  $this->books[$bookId];

        return $book[$field];
    }

    function createbook(){
        return "book is created";
    }

}
