<?php

echo "+-----------------------------------------+\n";
echo "|                                         |\n";
echo "|                Shaper!                  |\n";
echo "|                                         |\n";
echo "|  Supported Shapes:                      |\n";
echo "|  -----------------                      |\n";
echo "|   0) exit (to quit)                     |\n";
echo "|   1) square                             |\n";
echo "|   2) rectangle                          |\n";
echo "|   3) circle                             |\n";
echo "|                                         |\n";
echo "+-----------------------------------------+\n";

do {
  echo "\n\n";
  $shape = readline("Enter a shape: ");

  echo "You picked: " . $shape . "\n";

  if ($shape == "square") {
    $side = readline("Enter in the lenght of the side: ");
    echo "Area: " . $side * $side . "\n";
  } else if ($shape == "rectangle"){
    echo "Not build yet...";
  } else if ($shape == "circle"){
    echo "Not build yet...";
  } else if ($shape == "exit") {
    echo "Exiting!\n";

  } else {
    echo "Unsupported shape! " . $shape . "\n";
  }

} while($shape != "exit");


echo "All Done";

?>
