<?php

namespace App\Controllers;

class PagesController{

    public function home(){

//        require 'app/views/home.view.php';
        return view('home');

    }

    public function news(){

//        require 'app/views/news.view.php';
        return view('news');

    }

    public function contact(){

//        require 'app/views/contact.view.php';
        return view('contact');

    }

    public function about(){

//        require 'app/views/about.view.php';
        return view('about');

    }

}