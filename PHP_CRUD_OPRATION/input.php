<?php

include "connection.php";

$input=$db->exec("insert into kopi(kopi,rasa) values('".$_POST['kopi']."','".$_POST['rasa']."')");

if($input)
{
    header("Location:index.php");
}