<?php 

include "setting/config.php";
 $del_user = $_GET['userid'];
$del_done = $ravi->delete_user($del_user);
if($del_done==true)
{
	echo "<script>window.location = 'table-users.pphp?user=user-delete'; alert('utilisateur supprimer');</script>";
	
}
else
{
	echo "<script>window.location='table-users.php?user=user-delete'; alert('utilisateur non supprimer');</script>";
}
?>