<?php


// database connection
$conn = mysqli_connect("localhost", "root", "", "students_record");
if (!$conn) {
    die("database not connected");
}

if(isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    if(empty($name)) {
        echo "<div class='alert alert-danger alert-dismissible'>
        <strong>Warning!</strong> Student name is required.
      </div>";
      exit();
    }

    // $id = $_POST['id'];
    $fname = $_POST['fname'];
    $cnic_no = $_POST['cnic_no'];
    // Already exist.....
    $already_exist="SELECT cnic_no FROM students WHERE cnic_no='$cnic_no'"; 
   $result1=mysqli_query($conn,$already_exist);
   $get_num_of_rows=mysqli_num_rows($result1);
    
    if ($get_num_of_rows > 0) {
        echo "<div class='alert alert-danger alert-dismissible'>
        <strong>Warning!</strong>Tihis CNIC_NO  already exists in our records. Please try again with another one.
      </div>";
    }
    //   End of already exist
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    if($gender==-1){
    echo "<div class='alert alert-danger alert-dismissible'>
        <strong>Warning!</strong> Please choose gender first.
      </div>";
      exit();
    }
    $address = $_POST['address'];
    $status = 1;
    $sql = "INSERT INTO students ( `name`, `fname`, `cnic_no`, `mobile`, `gender`, `address`, `status`) 
    VALUES ('$name', '$fname', '$cnic_no', '$mobile', '$gender', '$address',  '$status')";

    

    if(mysqli_query($conn, $sql)) {

         
            header("Location:index.php");

    }   
}






?>