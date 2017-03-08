<?php
  $customTS = mktime(06, 06, 06, date('m'), date('d'), date('Y') - 20);
  $theDate = date("mM/dd/yY");
  $today = date('l');
  $timeStamp =  date("m/d/y", $customTS);
  echo "Today's date: $theDate <br />";
  echo "Today's day is: $today <br />";
  echo "Dikke timestamp: $timeStamp";
?>
