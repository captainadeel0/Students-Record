
<?php
// database connection
include("config.php");

if($_POST['submit']) {

    if(!isset($_POST['name']) || empty($_POST['name'])) {
        die("Name filed is required");
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $cnic_no = $_POST['cnic_no'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    // update query
    
    $sql = "UPDATE students SET name='$name', fname='$fname', cnic_no='$cnic_no', mobile='$mobile', gender='$gender', address='$address'  WHERE id=$id";

    if(mysqli_query($conn, $sql)) {

         
            header("Location:index.php");
        

    }

}


?>
