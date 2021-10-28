<?php

   //This set of code is to accept any input data and store it in the data base

include_once 'db.php';
if(isset($_POST['submit']))
{    
    $fname = $_POST['fname'];       //first name
    $lname = $_POST['lname'];       //last name
    $email = $_POST['email'];
    $contactmessage = $_POST['contactmessage'];

    $success = "Query successful!";
    $error = "Error: ";

    $sql = "INSERT INTO contact (fname, lname, email, contactmessage)
    VALUES ('$fname','$lname','$email','$contactmessage')";
    if (mysqli_query($conn, $sql)) {
        echo "Thank you for your message!";
    } else {
        echo $error . $sql . ":-" . mysqli_error($conn);
    }


    mysqli_close($conn);
}

else{
  echo "did not work...";
}
?>

<p> Click <a href="../html/products.html">Here</a> to go back to the products page!</p>