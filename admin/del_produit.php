<?php 
include "setting/config.php";
 $del_produit = $_GET['produitid'];
$del_done = $ravi->delete_produit($del_produit);
if($del_done==true)
{
	echo "<script>window.location = 'table-produit.php?produit=produit-delete'; alert('produit supprimer');</script>";
	
}
else
{
	echo "<script>window.location='table-produit.php?produit=produit-delete'; alert('produit non supprimer');</script>";
}
?>