<?php


namespace App\Controllers;


use App\Models\Book;

class SiteController
{
    function index() {
//        return view('index', [
//            'name' => 'John',
//            'age' => 22
//        ]);
        $book = new Book();
        $book->name = 'Garry Potter';
        $book->author = 'John Rowling';
        $book->save();
    }
}