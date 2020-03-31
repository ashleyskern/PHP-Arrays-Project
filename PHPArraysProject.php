<!DOCTYPE html>
<html>
<body>

<?php
echo "Total Number of Books:"."<br>";
$books=array(5,15,25);
echo array_sum($books)."<br><br>";

echo "Number of Thriller Novels:"."<br>";
$thriller=array("To Catch a Beast","Monster","Into the Night");
echo count($thriller)."<br><br>";

echo "Average Number Read:"."<br>";
$average = array_sum($books)/count($thriller);
echo $average
?>


</body>
</html>
