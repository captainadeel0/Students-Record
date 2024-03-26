<?php
 include("data.php");

 $id = $_GET['id'];

 $sql = "DELETE FROM students WHERE id = $id";
 $result = mysqli_query($conn , $sql);

    

    header("Location: index.php");

 


?>