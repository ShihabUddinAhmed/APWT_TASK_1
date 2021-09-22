<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pageIndex(){
        return view('page.index.landingpage');
    }
    public function pageData(){
        $title = "Hello";
        $des = "This is a description";

        $data = [
            'itemOne' => 'Mobile',
            'itemTwo' => 'Laptop'
        ];
        $names = ['mr. x', 'mr. y'];
        return view('helloPage2', [
            'names' => $names
        ]);

    }
}
