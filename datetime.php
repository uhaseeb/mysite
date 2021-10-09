<?php
$title= "Date and Time PHP";
include 'header.php';
$datetoday= getdate();
echo "Today's Date: <br>";
echo $datetoday['mday'] . "<br>";
echo $datetoday['mon'] . "<br";
echo $datetoday['year'] . "<br>";

echo " <br> Today's Date:" . $datetoday['mon'] . "/" . $datetoday['mday'] . "/" . $datetoday['year'] . "<br>";
$date = date('d-m-y h:i:s'); // get date and time from the system
echo"Today's Date and Time:" .  $date;
?>