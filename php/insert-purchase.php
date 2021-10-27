<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
    $fname = $_POST['fname'];       //first name
    $lname = $_POST['lname'];       //last name
    $email = $_POST['email'];
    $cardtype = $_POST['cardtype'];        
    $cardname = $_POST['cardname'];         
    $cardnum = $_POST['cardnum'];         
    $expdate = $_POST['expdate'];     
    $streetaddress = $_POST['streetaddress']; 

    $success = "Query successful!";
    $error = "Error: ";

    $sql = "INSERT INTO purchases (fname, lname, email, cardtype, cardname, cardnum, expdate, streetaddress)
    VALUES ('$fname','$lname', '$email', '$cardtype', '$cardname', '$cardnum', '$expdate', '$address')";
    if (mysqli_query($conn, $sql)) {
        echo "Thank you for your purchase!";

    } else {
        echo $error . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
    
else{
    echo "did not work...";
  }
?>

<p> Click <a href="../html/products.html">Here</a> to go back to the purchase page!</p>