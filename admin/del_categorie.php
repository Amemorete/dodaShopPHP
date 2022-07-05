<?php 
include "setting/config.php";
 $del_categorie = $_GET['categorieid'];
$del_done = $ravi->delete_categorie($del_categorie);
if($del_done==true)
{
	echo "<script>window.location = 'table-categorie.php?categorie=categorie-delete'; alert('categorie supprimer');</script>";
	
}
else
{
	echo "<script>window.location='table-categorie.php?categorie=categorie-delete'; alert('categorie non supprimer');</script>";
}
?>