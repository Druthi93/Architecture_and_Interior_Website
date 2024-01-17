<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','wt') or die("Connection Failed");

        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];


            $sql = "INSERT INTO `register` (`firstname`, `lastname`, `email`, `username` , `password`)  VALUES ('$firstname','$lastname','$email','$username','$password')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successful";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>