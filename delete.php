<?php

include_once("classes/Crud.php");

$crud = new Crud();

/
$id = $crud->escape_string($_GET['id']);


$result = $crud->delete($id, 'products');

if ($result) {
	header("Location:index.php");
}
?>

