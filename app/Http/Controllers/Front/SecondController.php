<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller{

    public function __construct(){

    $this-> middleware(middleware: 'auth')->except(methods: 'SayHello2') ;
}

    public function SayHello1(){
        echo 'sayHello1';
    }
    public function SayHello2(){
        echo 'sayHello2';
    }
    public function SayHello3(){
        echo 'sayHello3';
    }
}
