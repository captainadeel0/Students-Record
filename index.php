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
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-light bg-success m-3 p-1 text-center border  ">Students Form</h2>
    </div>


    <form method="POST" action="config.php" class="p-2 ">


        <div class="row m-2">
            <div class="col">
                <h6>Name</h6>
                <input type="text" name="name" class="form-control border border-success shadow" placeholder="Enter name" required>
            </div>
            <div class="col">
                <h6>Father Name</h6>
                <input type='text' name="fname" class="form-control border border-success shadow" placeholder="Enter father's name" required>

            </div>
            <div class="col">
                <h6>CNIC</h6>
                <input type='text' name="cnic_no" class="form-control border border-success shadow" data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" required>
            </div>
            <div class="col ">
                <h6>Mobile NO.</h6>
                <input type='text' name="mobile" class="form-control border border-success shadow" data-inputmask="'mask':'9999-9999999'" placeholder="xxxx-xxxxxxx" required>
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-3 ">
                <h6>Gender</h6>
                <select name="gender" class="form-control border border-success shadow"required>
                    <option value="-1">--Select Gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="col-9 ">
                <h6>Address</h6>
                <input type="text" name="address" class="form-control border border-success shadow" placeholder="Enter your address" required>
            </div>
        </div>
        <div class="form-check">
            <label class="form-check-label">&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input " type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <div class="button">
            <input class="btn btn-info bg-success m-4" type="submit" name="submit" value="Add Students">
        </div>

    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./assets/jquery.min.js"></script>
    <script src="./assets/jquery.inputmask.bundle.js"></script>


    <script>
        $(":input").inputmask();
    </script>
    <style>
        /* styles.css */

        /* Container */
        .container {
            max-width: 50%;
        }

        h2 {
            border-radius: 5px;
        }

        /* Registration Form Title */
        .bg-info {
            background-color: #17a2b8 !important;
            /* override Bootstrap default background color */
        }

        /* Form Elements */
        form input[type="text"],
        form input[type="number"],
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            /* Bootstrap default input border color */
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Radio Button and Checkbox */
        form input[type="radio"],
        form input[type="checkbox"] {
            margin-right: 10px;
        }

        /* Submit Button */
        form input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            /* Bootstrap primary button color */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
            /* Darker shade of primary color on hover */
        }

        button a {
            text-decoration: none;
            color: #ced4da;
        }
    </style>

    <div class="container">

        <h2 class="text-light bg-success m-3 p-1 text-center border-radius ">Students Record</h2>
    </div>

    <div class="container-fluid">

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Mobile NO</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include("config.php");
                $sql = "SELECT * FROM `students` ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['id'];
                        $name = $row['name'];
                        $fname = $row['fname'];
                        $cnic_no = $row['cnic_no'];
                        $mobile = $row['mobile'];
                        $gender = $row['gender'];
                        $address = $row['address'];
                        $status = $row['status'];


                ?>

                        <tr>
                            <td><?php echo $id;  ?></td>
                            <td><?php echo $name;  ?></td>
                            <td><?php echo $fname;  ?></td>
                            <td><?php echo $cnic_no;  ?></td>
                            <td><?php echo $mobile;  ?></td>
                            <td><?php echo $gender;  ?></td>
                            <td><?php echo $address;  ?></td>

                            <td><?php echo '<span class="badge bg-success text-white">Active</span>' ?></td>

                            <td>

                                <select name="action" class="form-control" onchange="location = this.value;">
                                    <option value="#" selected>--Option--</option>
                                    <option value="edit.php?id=<?php echo $id; ?>">Edit</option>
                                    <option value="delete.php?id=<?php echo $id; ?>">Delete</option>
                                    <option value="#">Active</option>
                                    <option value="#">Inactive</option>
                                </select>


                            </td>
                        </tr>






                <?php
                    }
                }
                ?>




            </tbody>
        </table>

    </div>
</body>

</html>