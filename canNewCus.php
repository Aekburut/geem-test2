<!doctype html>
<html lang="en">
    <head>
        <title>Added new Customer</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="canNewPet.php" method="get">
                <?php
                    include('navbar.php');

                    $cusname =  $_GET['cusname'];
                    $lname =  $_GET['lname'];
                    $tel =  $_GET['tel'];

                    $connect = mysqli_connect("localhost","root","","petsalon");
                    $sql = 'INSERT INTO customer VALUES(NULL,"'.$cusname.'","'.$lname.'","'.$tel.'")';
                    $result = mysqli_query($connect,$sql);
                ?>
                <h3 class="text-center">Add new customer successfully</h3>
                <input type="hidden" name="cusname" value="<?php echo $cusname ?>">
                <input type="hidden" name="lname" value="<?php echo $lname ?>">
                <input type="hidden" name="petname" value="<?php echo $_GET['petname'] ?>">
                <input type="hidden" name="gender" value="<?php echo $_GET['gender'] ?>">
                <input type="hidden" name="age" value="<?php echo $_GET['age'] ?>">
                <input type="hidden" name="typeid" value="<?php echo $_GET['typeid'] ?>">
                <div class="row justify-content-center">
                    <div class="form-group justify-content-center">
                        <button type="submit" class="btn btn-warning" style="width:100px; margin:5px;">Back</button>           
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
