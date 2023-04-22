<?php
/**
 *  Calculadora em PHP
 *  @author Wanderlei
 */



 function somar($num1, $num2){
    return $num1 + $num2;
 }

 function subtrair($num1, $num2){
    return $num1 - $num2;
 }
 
 function multiplicar($num1, $num2){
    return $num1 * $num2;
 }

 function dividir($num1, $num2){
    if ($num2 == 0){
        echo "\nDivisão por zero não permitida";
        return 0;
    } 
        
    return $num1 / $num2;
    
 }

 function calcularAreaRetangulo($base=" ", $altura=1.2){
    if ( empty($base)){
        return "\no valor da base deve ser informado.\n";
    }
    if ( is_string($base) ){
        return "\nO valor da base deve ser um número. Uma string foi enviada.";
    }

    if ( $altura <= 0){
        return "\nO valor da altura deve ser maior que zero.";
    }

    return $base * $altura;
 }



 print("A  área total do retângulo é: ");
 print( calcularAreaRetangulo(5) );
 print("\n");

 print("A  área total do segundo retângulo é: ");
 print( calcularAreaRetangulo(5,2) );
 print("\n");

 print("A  área total do terceiro retângulo é: ");
 print( calcularAreaRetangulo() );
 print("\n");

 print("A  área total do terceiro retângulo é: ");
 print( calcularAreaRetangulo(10, 0) );
 print("\n");

//  $x = 50;
//  $y = 25;
//  $z = 0;

//  print("\nA soma $x com $y  =  " . somar($x, $y));
//  print("\nA subtração $x e $y  =  " . subtrair($x, $y));
//  print("\nA multiplicação de  $x e $y  =  " .multiplicar($x, $y));
//  print("\nA divisão de  $x e $y  =  " . dividir($x, $y));
//  print("\nA divisão de  $x e $z  =  " . dividir($x, $z));
 