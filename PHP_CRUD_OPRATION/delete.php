<?php

include "connection.php";

$delete=$db->exec("delete from kopi where idp=".$_GET['idp']);

if($delete)
{
    header("Location:index.php");
}