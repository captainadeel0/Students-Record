<?php




    // database connection
$conn = mysqli_connect("localhost", "root", "", "students_record");
if (!$conn) {
    echo("database  connected");
}
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $cnic_no = $_POST['cnic_no'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    
    

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO students ( `name`, `fname`, `cnic_no`, `mobile`, `gender`) 
            VALUES ('$name', '$fname', '$cnic_no', '$mobile', '$gender')";

$result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header("Location:index.php");
    }

   
}









?>