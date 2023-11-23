<?php

namespace app\Controllers;

class RandomNumberController extends Controller
{

    public function index()
    {
        $randomNumber = rand(0, 100);
        return ['random_number' => $randomNumber];
    }
}