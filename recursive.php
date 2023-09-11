<?php

$cont = 1;

function printHelloWorld(&$cont) {
  echo "Hello World $cont" . PHP_EOL;

  // Number of loops that you want
  if ($cont++ >= 15) return;
  
  return printHelloWorld($cont);
}

printHelloWorld($cont);