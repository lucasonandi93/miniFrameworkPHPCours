<?php

namespace app\Controllers;

class EvenNumberController extends Controller
{

    public function listEvenNumbers($startAt, $quantity)
    {
        $startAt = (int)$startAt;
        $quantity = (int)$quantity;

        if ($startAt < 0 || $startAt % 2 !== 0 || $quantity < 0) {
            http_response_code(400);
            return 'Parámetros inválidos';
        }

        $evenNumbers = [];
        $count = 0;

        while ($count < $quantity) {
            if ($startAt % 2 === 0) {
                $evenNumbers[] = $startAt;
                $count++;
            }
            $startAt += 2;
        }

        return $evenNumbers;
    }

    public function isEven(){
            $number = $_POST['number'];

            $message = '';
            $isEven = ($number % 2 === 0);

            if ($isEven) {
                $message = "<p style='color: green;'>Le nombre $number est pair</p>";
            } else {
                $message = "<p style='color: red;'>Le nombre $number n'est pas pair</p>";
            }

        return $this->view('Home', ['message'=>$message]
        );
    }

}