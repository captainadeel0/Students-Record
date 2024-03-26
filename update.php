
<?php
// database connection
include("data.php");

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
    
    $sql = "UPDATE users_info SET name='$name', fname='fname', cnic_no='$cnic_no', mobile='$mobile', gender='$gender'  WHERE id=$id";

    if(mysqli_query($conn, $sql)) {

         
            header("Location:index.php");
        

    }

}


?>
