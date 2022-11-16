<!doctype html>
<?php
include('config.php');

if(isset($_GET['pid'])){

$pid=$_GET['pid'];
$sql="select product.*, category.name from product left join category on product.category=category.ID where product.id='$pid'";

$result=$conn->query($sql);
}

if(isset($_POST['id'])){ 
$ID=$_POST['ID'];
$Brand=$_POST['Brand'];
$Description=$_POST['Description'];
$Category=$_POST['Category'];
$PhoneNumber=$_POST['PhoneNumber'];
$Duration=$_POST['Duration'];
$Price=$_POST['Price'];

$sql="insert_into_product_values('$ID','$Brand','$Description','$PhoneNumber','$Qrice','$Quration','$Category','1')";

$result=$conn->query($sql);

$conn->close();
}
include('header.php')
?>

<div class="container">
    <form method ="post" action="display.php">
        <?php
            if($result->num_rows >0){
                while($row = $result -> fetch_assoc()){
		    $ID=$row['ID'];
		    $Brand=$row['Brand'];
		    $Description=$row['Description'];
		    $PhoneNumber=$row['PhoneNumber'];
                    $Price=$row['Price'];
                    $Duration=$row['Duration'];
		    $Category=$row['Category'];
	?>
    <div class="form group table table-striped table-active">
    <th scope="row">1</th>
            <td class="text-primary"><label for="ID">ID</label>
            <input type="text" class="form-control" id="ID" name="ID" value="<?php echo $ID; ?>"></td>
    </div>
    <div class="form group table table-striped table-active">
    <th scope="row">2</th>
            <td class="text-primary"><label for="Brand">Brand</label>
            <input type="text" class="form-control" id="Brand" name="Brand" value="<?php echo $Brand; ?>"></td>
    </div>
    <div class="form group table table-striped table-active">
    <th scope="row">3</th>
            <td class="text-primary"><label for="Description">Description</label>
            <textarea type="text" class="form-control" id="Description" name="Description" value="<?php echo $Description; ?>"></td>
    </textarea>
    <div class="form group table table-striped table-active">
    <th scope="row">4</th>
            <td class="text-primary"><label for="Category">Category</label>
            <input type="text" class="form-control" id="Category" name="Category" value="<?php echo $Category; ?>"></td>
    </div>
    <div class="form group table table-striped table-active">
    <th scope="row">5</th>
            <td class="text-primary"><label for="Duration">Duration</label>
            <input type="date" class="form-control" id="Duration" name="Duration" value="<?php echo $Duration; ?>"></td>
    </div>

    <div class="form group table table-striped table-active">
    <th scope="row">6</th>
            <td class="text-primary"><label for="PhoneNumber">PhoneNumber</label>
            <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?php echo $PhoneNumber; ?>"></td>
    </div>
    <div class="form group table table-striped table-active">
    <th scope="row">7</th>
            <td class="text-primary"><label for="Price">Price</label>
            <input type="text" class="form-control" id="Price" name="Price" value="<?php echo $Price; ?>"></td>
    </div>
    <button $type="submit" class="btn btn-primary">Update</button>
        <?php
		        }
	        }
	?>
    </from>
<div>