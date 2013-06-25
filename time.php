<?php

$time1 = "11:59:59 pm";
$time2 = "08:59:59 am";

$current_time = date('h:i:s a');
echo $current_time;

if (strtotime($time1) > strtotime($current_time) && strtotime($time2) < strtotime($current_time)) {
   echo "true";
} else {
    echo "false";
}

?>