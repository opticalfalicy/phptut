<?php

  // echo date('d'); // Day
  // echo date('m'); // Month
  // echo date('Y'); // Year
  // echo date('l'); // Day Of The Week

  // echo date('Y/m/d');
  // echo date('m-Y-d');

  // echo date('h'); // Hour
  // echo date('i'); // Min
  // echo date('s'); // Seconds
  // echo date('a'); // Am or Pm


  // Set Time Zone
  date_default_timezone_set('America/Chicago');
  // echo date('h:i:sa');

  /*
    
    Unix timestamp is a long integer containing the number of seconds
    between the Unix Epoch (Jan 1st 1970 00:00:00 GMT) and the time specified.

  */

  // $timestap = mktime(10, 14, 54, 9, 10, 1981);
  // // echo $timestap;
  // echo date('m/d/Y h:i:sa', $timestap);

  $timestamp2 = strtotime('7:00pm March 22 2016');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp5 = strtotime('+2 Days');

  // echo $timestamp2;

  echo date('m/d/Y h:i:sa', $timestamp5);

?>