<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pageIndex(){
        return view('page.index.landingpage');
    }

    public function pageService(){
        $data = [
            'model1' => 'TOYOTA CIVIC',
            'model2' => 'TOYOTA AQUA'
        ];
        return view('product.service', ['cars' => $data]);
    }

    public function pageTeams(){
        return view('ourteams');
    }

    public function pageAbout(){
        return view('aboutus');
    }

    public function pageContact(){
        return view('contact');
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
