<?php

//while
//ehile (true) {
//  // Do something
//}
// loop with $counter
//$counter = 0;
//$loop = true;
//while ($loop) {
//      echo "counter $counter" . '<br>';
//      if ($counter >= 10) {
//          $loop = false;
//      }
//      $counter++;
//}

// do - while
$counter = 10;
do {
    echo "Counter $counter";
} while ($counter < 10);

/ for
for ($i = 0; $i < 10; $i++) {
//  echo "Counter: $i".'<br>';
//}

// foreach
$fruits = ["Banana","Apple","Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
//}

// Iterate Over association array.
$person = [
    'name' => 'Marsell'
    'surname' => 'Rumayauw'
    'age' => 30
    'hobbies' => 'swimming'
]