<?php
include('config.php');
include('header.php');

if(isset($_POST['ID'])){
	$ID=$_POST['ID'];
	$Brand=$_POST['Brand'];
	$Description=$_POST['Description'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$Price=$_POST['Price'];
	$Duration=$_POST['Duration'];
	$Category=$_POST['Category'];

	$sql="update product set Brand = '$Brand' , Description='$Description',PhoneNumber='$PhoneNumber',Price='$Price',Duration='$Duration',Category='$Category' where ID = '$ID'";
	
	$result=$conn->query($sql);
}
	

if(isset($_POST['add'])){ 
	$ID=$_POST['ID'];
	$Brand=$_POST['Brand'];
	$Description=$_POST['Description'];
	$Category=$_POST['Category'];
	$Duration=$_POST['Duration'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$Price=$_POST['Price'];
	
	
	$sql="insert into product values('$ID','$Brand','$Description','$PhoneNumber','$Price','$Duration','$Category','1')";
	
	$result=$conn->query($sql);
	
}

if(isset($_GET['delete'])){
	$ID=$_GET['delete'];
	$sql="delete from product where ID=$ID";
	
	$result=$conn->query($sql);
	
}
$keyword="";
if(isset($_POST['search_product'])){
	$keyword=$_POST['search_product'];
	$keyword=" where product.Brand like '%$keyword%' or product.description like '%$keyword%'";
}

$sql="select product.*, category.name from product left join category on product.category=category.ID".$keyword;

$result=$conn->query($sql);
?>
    <div class="container">
	    <div class="row">
		    <table class="table table-striped table-dark">
		        <thead>
		        <tr>
		            <th>ID</th>
                    <th></th>
		            <th>Brand & Discription</th>
		            <th>Category</th>
		            <th>Owner Phone</th>
					<th>Date limit</th>
                    <th>Price</th>
                    <th>Actions</th>
		        </tr>
		    </thead>
		        <tbody>
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
		            <tr>
		                <td><?php echo $ID; ?></td>
                        <td></td>
		                <td style="max-width:500px">
		                    <h6><?php echo $Brand; ?></h6>
		                    <em class="text-muted">
							<?php echo $Description; ?>
		                    </em>
		                </td>
                        <td><?php echo $Category; ?></td>
                        <td><?php echo $PhoneNumber; ?></td>
						<td class="text-warning"><?php echo $Duration; ?></td>
                        <td><?php echo $Price; ?></td>
		                <td>
		                    <a href="edit.php?pid=<?php echo $ID; ?>" class="btn btn-warning">Edit</a> | 
		                    <a href="display.php?delete=<?php echo $ID;?>" name="delete" class="btn btn-danger">Rent</a>
		                </td>
		            </tr>
					<?php
							}
						}
					?>
		        </tbody>
		    </table>
	</div>
    </div>
</body>
</html>