<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Eslam{

}
class EslamController extends Controller{

    public function __construct(){

        // $this-> middleware(middleware: 'auth');
    }

    public function SayHello(){


        // $obje = new Eslam;
        // $obje->name = 'Ahmed';
        // $obje->Age = 30;
        // $string = [];
        // $string['name'] = 'Zavin';
        // $string['Age'] = 25;
        return view('welcome');
    }

}

