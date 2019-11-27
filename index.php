<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM products ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;


include_once("view/layout/header.php");
?>
	<div class="container">
		<div class="d-flex pt-3">
			<h3 class="text-uppercase">product list</h3>
			<a href="create.php" class="btn btn-info float-right ml-auto">Add Item</a>
		</div>
		<hr>
		<div class="row">
			<?php 
				foreach ($result as $key => $res) {		
				echo "<div class='col-md-3 mt-3'>";
				echo "<div class='card text-center bg-light'>
					<div class='card-body'>";
				echo "<p class='card-text'>".$res['sku']."</p>";
				echo "<p>".$res['name']."</p>";
				echo "<p>".$res['price']." $ </p>";
				if ($res['size'] !== "") {
					echo "<p> Size: ".$res['size']." MB </p>";
				} else if ($res['weight'] !== "") {
					echo "<p> Weight: ".$res['weight']." KG </p>";
				} else {
					echo "<p> Dimension: ".$res['dimension']."</p>";
				}
				echo "<p><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></p>";
  				echo "</div></div>";				
				echo "</div>";		
			}
			?>
		</div>
	</div>
</body>
</html>
<?php
	include_once("view/layout/footer.php");
?>
