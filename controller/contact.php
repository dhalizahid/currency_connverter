<?php
include("../model/class.db.php");
if (isset($_POST['submit'])&& ($_POST['submit']=='SEND')) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_no'];
    $message = $_POST['message'];

    if (empty($name)|| empty($email)|| empty($message)) {
        echo "Error ! YOu must all input fild";
    }
    else {
        $query = "INSERT INTO contact(`name`,email,phone,`message`)";
        echo $query .= "VALUES('$name','$email','$phone','$message')";

        $db = new db();
        $result = $db->exceute($query);
        if (!$result) {
            echo "Data insert faild";
        }
        else {
            header("Location:../index.php");
        }
    }
}