<?php

$connect = mysqli_connect("localhost", "root", "", "burger");
if($connect)
{
  echo("Connect successfully!");
}
?>