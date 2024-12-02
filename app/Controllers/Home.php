<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    //imprimir algo                 
    public function saludar()
    {
        echo "<h1>Hola mundo</h1>";
    }

    public function saludar2($nombre){
        echo "<h1>Hola $nombre</h1>";
    }

    public function saludar3($nombre, $edad){
        echo "<h1>Hola $nombre</h1>";
        //if ternario solo sirve si quieres devolver un valor
        echo ($edad>=18)? "<h1>Eres mayor de edad" : "Eres menor de edad<h1>";
    }

    public function calculadora($num1, $num2, $operacion){

        echo "Numero 1: $num1 <br>";
        echo "Numero 2: $num2 <br>";
        echo "<hr>";

        switch ($operacion) {
            case 's': echo "<h1>Suma = ".($num1+$num2)." </h1>"; break;
            case 'm': echo "<h1>Multiplicacion = ".($num1*$num2)." </h1>"; break;
            case 'r': echo "<h1>Resta = ".($num1-$num2)." </h1>"; break;
            case 'd': echo "<h1>Division = ".($num1/$num2)." </h1>"; break;
            default: echo "<h1>Esta opearcion no existe )= </h1>"; break;
        }   

    }

    public function plantilla(){
        
        return view("plantilla");
        
    }

}



       
