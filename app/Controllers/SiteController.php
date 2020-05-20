<?php


namespace App\Controllers;


class SiteController
{
    function index() {
        return view('index', [
            'name' => 'John',
            'age' => 22
        ]);
    }
}