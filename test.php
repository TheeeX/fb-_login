<?php
require 'dbconfig.php';

$fuid=99;$ffname=ff;$femail=fe;

echo $fuid;

$query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$femail')";
mysql_query($query);

?>