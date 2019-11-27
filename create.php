<?php
include_once("view/layout/header.php");
?>

<div class="container">
    <div class="d-flex pt-3">
		<h3 class="text-uppercase">product add</h3>
		<a href="index.php" class="btn btn-info float-right ml-auto">Go Back</a>
	</div>
    <hr>
    
	<div id="msg"></div>
	<div class="row">
        <div class="col-md-12">
            <!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
            <form action="add.php" method="post" name="form1" >
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" class="form-control w-50" id="sku" aria-describedby="skuhelp">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control w-50" id="name" aria-describedby="namehelp">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control w-50" id="price" aria-describedby="pricehelp">
                </div>
                <div class="form-group">
                    <label for="typeSwitcher">Type switcher</label>
                    <select class="form-control w-50" id="typeSwitcher">
                        <option selected disabled value=''></option>
                        <option value="disc">DVD-disc</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                    </select>
                </div>
                <div class="form-group selectable" name="disc" id="disc" style="display: none;"">
                    <label for="size">Size</label>
                    <input type="text" name="size" class="form-control w-50" id="size" aria-describedby="sizehelp">
                    <small>Please provide size in MB format.</small>
                </div>
                <div class="form-group selectable" name="book" id="book" style="display: none;">
                    <label for="weight">Weight</label>
                    <input type="text" name="weight" class="form-control w-50" id="weight" aria-describedby="weighthelp">
                    <small>Please provide weight in Kg format.</small>
                </div>
                <div class="form-group selectable" name="furniture" id="furniture" style="display: none;">
                    <label for="height">Height</label>
                    <input type="text" name="height" class="form-control w-50" id="height" aria-describedby="heighthelp">
                    <label for="width">Width</label>
                    <input type="text" name="width" class="form-control w-50" id="width" aria-describedby="widthhelp">
                    <label for="length">Length</label>
                    <input type="text" name="length" class="form-control w-50" id="length" aria-describedby="lengthhelp">
                    <small>Please provide dimensions in HxWxL format.</small>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="Submit" value="Submit" onClick="header('Location:index.php');">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
	include_once("view/layout/footer.php");
?>

<script>
    $("#typeSwitcher").on("change", function() {
        $(".selectable").hide();
        const a = $("#" + $(this).val()).show();
        console.log(a);
    })

	function validate() {
		if (document.form1.sku.value == '') {
			alert('Please provide unique sku');
			document.form1.name.focus();				
			return false;
		}
		if (document.form1.name.value == '') {
			alert('Please provide a name');
			document.form1.name.focus();
			return false;
		}
        if (document.form1.price.value == '') {
			alert('Please provide a price');
			document.form1.price.focus();				
			return false;
		}
		return true;
	}
</script>	