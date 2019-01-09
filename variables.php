hello

<h1>hello</h1>

<h2><?php echo "hey"?></h2>

<?php print 'yo'?>

<?php

  // comment
  # comment
  
  /*
    multi line comment
  */

  $output = 'Hello World!';

  echo $output;

  

?>

<?php 

// ------------ RULES --------------

#VARIABLES
/*
  - Prefix $
  - Start with a letter or underscore _ 
  - Only letters, numbers, or underscores
  - Case sensitive

*/

// THIS WONT WORK!!!

/*
  $1output = 'Hello Norld';
  echo $1output;

  Parse error: syntax error, unexpected '$output' (T_VARIABLE) in C:\xampp\htdocs\phpsandbox\variables.php on line 18

  ----------------------------

  $Noutput = 'Hello Gorld';
  echo $noutput;

  Notice: Undefined variable: noutput in C:\xampp\htdocs\phpsandbox\variables.php on line 24
  
*/

// This Will Work!

/*

$output = 'Hello Borld';
echo $output;

$_output = 'Hello Dorld';
echo $_output;
  
*/

#DATA TYPES

/*
  
  String
  Integers   
  Floats   
  Booleans   
  Arrays
  Objects
  NULL
  Resource

*/

$float1 = 4.4;
$bool1 = true;

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
echo $sum;

/* 
  $str1 = 'Hel';
  $str2 = 'lo';
  $greet = $str1 + $str2;
  echo $greet;

  Warning: A non-numeric value encountered in C:\xampp\htdocs\phpsandbox\variables.php on line 90
*/

// Concat strings
$str1 = 'Hel';
$str2 = 'lo';
$greet = $str1 . $str2;
echo $greet;

// Concat strings + exclamation mark
$str1 = 'Hel';
$str2 = 'lo';
$greet2 = $str1 .' '. $str2.'!';
echo $greet2;

// Single quotes == Literal string
$greet3 = '$str1 $str2';
echo $greet3;

// Double quotes == String with variables
$greet4 = "$str1 $str2";
echo $greet4;

/*

  $str3 = 'They're Here';
  echo $string3;

  $str3 = "They"re Here";

  Parse error: syntax error, unexpected 're' (T_STRING) in C:\xampp\htdocs\phpsandbox\variables.php on line 121



*/

$str3 = 'They\'re Here';
$str4 = "They're Here";

echo $str3 .' '. $str4;


# Constants

define('GREETING', 'Hello Everyone');
echo GREETING;

define('LILGREET', 'hello everyone', true);
echo lilgreet;


?>

