<?php

$email_id = $_POST["emailid"];
$msg = "Welcome to the pet store website. Your new password is 1234567";
mail($email_id,"New password",$msg);
echo 'Mail sent successfully to '.$email_id;


$servername = "";
$username = "";
$password = "";
$dbname = "mohithma_wdm";


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$businessname = $_POST["businessname"];
$roleid = $_POST["roleid"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO clients (fname, lname, email,phone,businessname,roleid)
VALUES ('$fname','$lname','$email_id','$phone','$businessname','$roleid')";

if ($conn->query($sql) === TRUE) {
echo "
            <script type=\"text/javascript\">
            setTimeout(function() {
  window.location.href = \"http://mohithmarisetti.uta.cloud/assignment4/index.html\";
}, 3000);
            </script>
        ";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



 ?>