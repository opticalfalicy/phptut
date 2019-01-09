<?php

  #Array - Variable that holds multiple values

  /*

    - Indexed
    - Associative
    - Multi-dimensional
    

  */

  // Indexed

  $people = array('Kevin', 'Jeremy', 'Sara');
  // echo $people[1];

  $ids = array(23, 55, 12);
  // echo $ids[2];

  $cars = ['Honda', 'Toyota', 'Ford'];
  // echo $cars[1];

  $cars[3] = 'Chevy';
  // echo $cars[3];

  $cars[] = 'BMW';
  // echo $cars[4];

  // echo count($cars);
  // print_r($cars);
  // var_dump($cars);
  

?>

<?php 
  // Associative Arrays

    // $people = array('Brett' => 23, 'Gorg' => 2000, 'Timmy' => 1);
    $people = ['Brett' => 23, 'Gorg' => 2000, 'Timmy' => 1];
    // echo $people['Brett'];
    
    $ids = [22 => 'Brett', 40 => 'Gorg', 999 => 'Timmy'];
    // echo $ids[22];

    $people['Jilb'] = 90;
    // echo $people['Jilb'];
    // print_r($people);
    // var_dump($people);


?>

<?php 
  $cars = array(
    array('GOnda', 20, 10),
    array('Loyota', 1, 5),
    array('Bord', 55, 100),

  );

  echo $cars[0][1];
  echo ' ';
  echo $cars[1][2];
?>
