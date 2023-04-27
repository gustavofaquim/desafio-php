<?php 

function fibonacci($n){
    if ($n == 1) {
      return [0];
    } 
    else {
      $fib = [0, 1];
      for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
      }
      sort($fib);
      return $fib;
    }
}
  

$resultado = fibonacci(10);
print_r($resultado); 
  