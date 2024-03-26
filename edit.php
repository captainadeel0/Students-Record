<?php
include("data.php");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows($result) > 0) {
    $result = mysqli_fetch_assoc($result);

    // echo "<pre>"; print_r($result); echo "</pre>";
} else {
    die("no record found");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fonts/css/all.css">
    <script src="./assets/fonts/js/all.js"></script>
</head>
<body>
    <div class="container w-50 shadow mx-auto mt-3">
        <div class="bg-info p-2 mb-3">
            <h2 class="text-white text-center">Update Record</h2>
        </div>
        <div class="text-center mb-4">
           

        </div>

        <form method="POST" action="data.php" class="p-4 border">
        <input type="hidden" name="id" value="<?= $result['id'] ?>" />
        <h6>Name</h6>
            <div class="form-group">
                <input type="text" name="name" value="<?= $result['name'] ?>" placeholder="Enter your name" class="form-control " required>
            </div>
            <h6>Father Name</h6>
            <div class="form-group">
                <input type="text" name="fname" value="<?= $result['fname'] ?>" placeholder="Enter your  Father Name" class="form-control " required>
            </div>
            <h6>CNIC:</h6>
            <div class="form-group">
                <input type="integer" name="cnic_no" value="<?= $result['cnic_no'] ?>" placeholder="XXXXX-XXXXXXX-X" class="form-control " required>
            </div>
            <h6>Mobile Number:</h6>
            <div class="form-group">
                <input type="integer" name="mobile" value="<?= $result['mobile'] ?>" placeholder="0000-0000000" class="form-control " required>
            </div>
            <h6>Select Gender:</h6>
  <input type="radio"  name="gender" value="<?= $result['gender'] ?>">
  <label for="male">Male</label><br>
  <input type="radio" name="gender" value="<?= $result['gender'] ?>">
  <label for="female">Female</label><br>
            
            
            <input type="submit" class="btn btn-success w-100" name="submit" value="Update and Save" />
        </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
/* styles.css */

/* Container */
.container {
    max-width: 50%;
}

/* Registration Form Title */
.bg-info {
    background-color: #17a2b8 !important; /* override Bootstrap default background color */
}

/* Form Elements */
form input[type="text"],
form input[type="number"],
form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ced4da; /* Bootstrap default input border color */
    border-radius: 5px;
    box-sizing: border-box;
}

/* Radio Button and Checkbox */
form input[type="radio"] {
    margin-right: 10px;
}

/* Submit Button */
form input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff; /* Bootstrap primary button color */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #0056b3; /* Darker shade of primary color on hover */
}
</style>

