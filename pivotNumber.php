<?php
/**
  Welcome to PivotNumber Discoverer - IGX 2023!!
**/
/**
  Bienvenido al Descubridor de Numeros Pivotes!! - IGX 2023!!
**/

/* input the sequence limit. Ex: 8. Or try with 10000 */
/* Ingresa el limite de la secuencia. Por ejemplo: 8. O intenta con 10000 */

pivotNumber(10000);

function pivotNumber($limit){
  $sequence = array();
  echo "Sequence limit: ". $limit . ".\n";
  foreach (range(0, $limit) as $number) {
    $sequence[$number] = $number;
  }
  for ($i = $sequence[0]; $i <= $limit; $i++){
    $prevSum = 0;
    $nextSum = 0;
    if ($i > 1){
      $j = $i;
      $k = $i;
      for ($j; $j > 0; $j--){
        $prev = ($j - 1);
        $prevSum += $prev;
      }
      for ($k; $k <= ($limit-1); $k++ ){
          $next = ($k+1);
          $nextSum += $next;
            if ($nextSum > $prevSum){
              break;
            }
          if ($nextSum == $prevSum){
              echo "!!! PIVOT FOUND / PIVOTE ENCONTRADO: ".$i." !!! \n";
            }
          }
      }
    }
  }
  ?>
