<!doctype html>
<?php
include('config.php');

if(isset($_POST['ID'])){ 
$ID=$_POST['ID'];
$Brand=$_POST['Brand'];
$Description=$_POST['Description'];
$Category=$_POST['Category'];
$Duration=$_POST['Duration'];
$PhoneNumber=$_POST['PhoneNumber'];
$Price=$_POST['Price'];


$sql="insert into product values('$ID','$Brand','$Description','$PhoneNumber','$Price','$Duration','$Category','1')";

$result=$conn->query($sql);

$conn->close();

}
include('header.php');
?>

<div class="container">
    <form method ="post" action="display.php">
    <div class="form group table table-bordered table-dark">
    <th scope="row">1</th>
        <label for="ID">ID</label>
        <input type="text" class="form-control" id="ID" name="ID">
    </div>
    <div class="form group table table-bordered table-dark">
    <th scope="row">2</th>
        <td class="text-hide"><label for="$Brand">Brand</label>
        <input type="text" class="form-control" id="Brand" name="Brand"></td>
    </div>
    <div class="form group table table-bordered table-dark">
    <th scope="row">3</th>
        <td class="text-hide"><label for="Description">Description</label>
        <input type="text" class="form-control" id="Description" name="Description"></td>
    </div>
    <div class="form group table table-bordered table-dark">
    <th scope="row">4</th>
        <td class="text-hide"><label for="Category">Category</label>
        <input type="text" class="form-control" id="Category" name="Category"></td>
    </div>
    <div class="form group table table-bordered table-dark">
    <th scope="row">5</th>
        <td class="text-warning"><label for="Duration">Duration</label>
        <input type="date" class="form-control" id="Duration" name="Duration"></td>
    </div>
    <div class="form group table table-bordered table-dark">
    <th scope="row">6</th>
        <td class="text-hide"><label for="PhoneNumber">PhoneNumber</label>
        <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber"></td>
    </div>
    <div class="form group table table-bordered table-dark">
    <th scope="row">7</th>
        <td class="text-hide"><label for="Price">Price</label>
        <input type="text" class="form-control" id="Price" name="Price"></td>
    </div>
    <button name="add" type="submit" class="btn btn-primary" >Submit</button>
 
<div>
