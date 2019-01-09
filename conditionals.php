<?php

  # CONDITIONALS

  /*

    ==
    ===
    <
    >
    <=
    >=
    !=
    !==


  */

  /*
  $num = 5;

  // Passes
  if($num == '5'){
    echo '5 passed';
  } else {echo 'false';}

  // Fails
  if($num === '5'){
    echo '5 passed';
  } else {echo 'false';}

  // Fails
  if($num > 5){
    echo '5 passed';
  } else {echo 'false';}
  */

  # Nesting IF

  // $num = 5;

  // if($num > 4){
  //   if($num < 10){
  //     echo "$num passed";
  //   }
  // }

  /*

    # lOGICAL OPERATORS

    and &&
    or ||
    xor


  */

  // if($num > 4 AND $num < 10){
  //   echo "$num passed";
  // }

  // if($num > 4 OR $num < 10){
  //   echo "$num passed";
  // }
  
  // if($num > 4 XOR $num < 10){
  //   echo "$num passed";
  // }


  # SWITCH
  
  $favColor = 'purple';

  switch($favColor){
    case 'red':
      echo 'Your fav color is red';
      break;
    case 'black':
      echo 'Your fav color is black';
      break;
    case 'white':
      echo 'Your fav color is white';
      break;
    case 'gray':
      echo 'Your fav color is gray';
      break;
    default:
      echo "Your fav color is $favColor";
  }

?>