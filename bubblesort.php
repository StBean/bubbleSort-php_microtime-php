
<?php

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}


$time_start = microtime_float();

$x = array();
for( $i = 0; $i < 100; $i++) {
  array_push($x, floor(rand(1,10000)));
}
function bubbleSort($data) {
 for( $i = 0; $i < count($data) + 1; $i++) {
   for( $k = 0; $k < count($data) - 1; $k++) {
     if($data[$k] > $data[$k + 1]) {
       $temp = $data[$k + 1];
       $data[$k + 1] = $data[$k];
       $data[$k] = $temp;
      }
    }
  }
  return $data;
}

bubbleSort($x);


$time_end = microtime_float();
$time = $time_end - $time_start;

echo $time;

?>



	









 
