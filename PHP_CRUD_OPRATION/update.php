<?php

include "connection.php";



$input=$db->exec("update kopi set kopi='".$_POST['kopi']."',Rasa='".$_POST['Rasa']."'where idp=".$_POST['idp']);

if($input)
{
    header("Location:index.php");
}
// $update=$db->exec("update siswa set nama='".$_POST['nama']."',pekerjaan='".$_POST['pekerjaan']."'where id_siswa=".$_POST['id_siswa']);