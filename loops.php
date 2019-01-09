<?php

  # LOOPS - Execute code set number of times 

  /*

    For
    While
    Do..While
    Foreach

  */

  # For Loop
  # @params - init, condition, inc

  // for($i = 0; $i <= 10; $i++){

  //   echo 'Number '.$i;
  //   echo '<br>';

  // }

  #While Loop
  # @params - condition

  // $i = 0;

  // while($i < 10){
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  # Do..While
  # @params - condition
  # Always happens at least once

  // $i = 0;
  // do{
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  // while($i < 10);
  
  # Foreach Loop - For arrays

  // $people = array('Brett', 'Bort', 'Timmy');

  // foreach($people as $person){
  //   echo $person;
  //   echo '<br>';
  // }

  $people = array('Brett' => 'b@mail.com', 'Bort' => 'bort@bormail.com', 'Timmy' => 't@tmail.com');

  foreach($people as $person => $email){
    echo $person .': '. $email;
    echo '<br>';
  }



?>