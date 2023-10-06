<?php
include "db_conn.php";

if(isset($_POST['submit'])){
        $fname = $_POST["first_name"];
        $mname = $_POST["middle_name"];
        $lname = $_POST["last_name"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $issue = $_POST["issue"];
        $issue_countered = $_POST["issue_countered"];
        $status = $_POST["status"];

        $sql = "INSERT INTO `customers`(`ID`, `firstname`, `middlename`, `lastname`, `mobile`, `email`, `address`, `issue`, `issuecounteredonandfrom`, `status`)
        VALUES (NULL,'$fname','$mname','$lname','$mobile','$email','$address','$issue','$issue_countered','$status')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: index_customer.php?msg=New record created successfully");
        }
        else{
            echo "Failed: " . mysqli_error($conn);
        }


    
}

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

     <!--Font Awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .logo {
            display: flex;
            align-items: center;
        }
    
        .logo img {
            width: 180px;
            margin-right: 10px;
        }
    </style>  
      <title>New Employee</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #01c5fb;">
        <div class="logo">
            <img src="logo.png" alt="CCMate Logo">
        </div>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Customer</h3>
            <p class="text-muted">Complete the form below to add a new Customer</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="add_customer.php" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">First_Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="first_name" required>
                    </div>

                    <div class="col">
                        <label class="form-label">Middle_Name:</label>
                        <input type="text" class="form-control" name="middle_name" placeholder="middle_name">
                    </div>

                    <div class="col">
                        <label class="form-label">Last_Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="last_name" required>
                    </div>
                </div>

                
                <div class="form-group mb-3">
                    <label class="form-label">Mobile_No:</label>
                    <input type="mobile" class="form-control" name="mobile" placeholder="enter your mobile number" required>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>

                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Address:</label>
                    <input type="address" class="form-control" name="address">
                </div>


                <div class="form-group mb-3">
                    <label class="form-label">Issue:</label>
                    <input type="text" class="form-control" name="issue" required>
                </div>

                <div class="form-group mb-3">
                    <label for="issue_countered">Issue countered on and from:</label>
                    <input type="text" class="form-control" name="issue_countered" required>
                </div>

                <div class="form-group mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status">
                        <option value="choose status">Choose status</option>
                        <option value="pending">Pending</option>
                        <option value="solved">Solved</option>
                        <option value="forwarded">Forwarded</option>
                    </select>
                </div>

                <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="index_customer.php" class="btn btn-danger">Cancel</a>
                </div>
                
            </form>

        </div>
    </div>
   <!--Bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>