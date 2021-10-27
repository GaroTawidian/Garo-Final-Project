<?php
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

/*
	 echo "<br>" . "<br>" . "JOHN QUERIES:" . "<br>" . "<br>";


    $sql = "SELECT * FROM profiles WHERE fname = 'John'";     //Query for first name = 'John'
    if (mysqli_query($conn, $sql)) {
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br>" . "First Name: " . $row["fname"] . "<br>". 
        "Last Name: " . $row["lname"] . "<br>" . 
        "Date of Birth: " . $row["dob1"] . " " . $row["dob2"] . " " . $row["dob3"] . "<br>" . 
        "Gender: " . $row["gender"] . "<br>" . 
        "Country: " . $row["country"] . "<br>" . 
        "Email: " . $row["email"] . "<br>" . 
        "Phone Number: " . $row["phone"] . "<br>";
      }
    } else {
      echo "User with that name does not exist. Try again";
    }

    } else {
        echo $error . $sql . ":-" . mysqli_error($conn);
    }
    
    
    echo "<br>" . "<br>" . "CANADA QUERIES:" . "<br>" . "<br>";
    
    

    $sql = "SELECT * FROM profiles WHERE country = 'canada'"; //Query for country = 'Canada'
    if (mysqli_query($conn, $sql)) {
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br>" . "First Name: " . $row["fname"] . "<br>". 
        "Last Name: " . $row["lname"] . "<br>" . 
        "Date of Birth: " . $row["dob1"] . " " . $row["dob2"] . " " . $row["dob3"] . "<br>" . 
        "Gender: " . $row["gender"] . "<br>" . 
        "Country: " . $row["country"] . "<br>" . 
        "Email: " . $row["email"] . "<br>" . 
        "Phone Number: " . $row["phone"] . "<br>";
      }
    } else {
      echo "User with that country does not exist. Try again";
    }
   
    } else {
        echo $error . $sql . ":-" . mysqli_error($conn);
    }
    
    
     echo "<br>" . "<br>" . "MALE QUERIES:" . "<br>" . "<br>";
    

    $sql = "SELECT * FROM profiles WHERE gender = 'male'";    //query for gender = 'male'
    if (mysqli_query($conn, $sql)) {
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br>" . "First Name: " . $row["fname"] . "<br>". 
        "Last Name: " . $row["lname"] . "<br>" . 
        "Date of Birth: " . $row["dob1"] . " " . $row["dob2"] . " " . $row["dob3"] . "<br>" . 
        "Gender: " . $row["gender"] . "<br>" . 
        "Country: " . $row["country"] . "<br>" . 
        "Email: " . $row["email"] . "<br>" . 
        "Phone Number: " . $row["phone"] . "<br>";
        
        echo "<br" . "Male is created" . "<br>";
      }
    } else {
      echo "User with that genderMale does not exist. Try again";
    }

    } else {
        echo $error . $sql . ":-" . mysqli_error($conn);
    }
    
    echo "<br>" . "<br>" . "FEMALE QUERIES:" . "<br>" . "<br>";

    $sql = "SELECT * FROM profiles WHERE gender = 'female'";  //Query for gender = 'female'
    if (mysqli_query($conn, $sql)) {
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br>" . "First Name: " . $row["fname"] . "<br>". 
        "Last Name: " . $row["lname"] . "<br>" . 
        "Date of Birth: " . $row["dob1"] . " " . $row["dob2"] . " " . $row["dob3"] . "<br>" . 
        "Gender: " . $row["gender"] . "<br>" . 
        "Country: " . $row["country"] . "<br>" . 
        "Email: " . $row["email"] . "<br>" . 
        "Phone Number: " . $row["phone"] . "<br>";
      }
    } else {
      echo "User with that genderFemale does not exist. Try again";
    }
    
    } else {
        echo $error . $sql . ":-" . mysqli_error($conn);
    }
    */

    mysqli_close($conn);
}

else{
  echo "did not work...";
}
?>

<p> Click <a href="../html/products.html">Here</a> to go back to the products page!</p>