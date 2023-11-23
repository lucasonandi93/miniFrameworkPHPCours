<?php

namespace app\Controllers;
class HomeController extends Controller
{
    public function index()
    {
        return $this->view('Home', [
            'title' => 'Home',
            'description' => 'esta es la pagina home'
        ]);
    }


}