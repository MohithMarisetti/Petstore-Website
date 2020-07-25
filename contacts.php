<?php

$email_id = $_POST["emailid"];


$servername = "mohithmarisetti.uta.cloud";
$username = "mohithma_root";
$password = "Qwerty@123";
$dbname = "mohithma_wdm";


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$businessname = $_POST["businessname"];
$roleid = $_POST["roleid"];
$comments = $_POST["comments"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contacts (fname, lname, email,phone,comments)
VALUES ('$fname','$lname','$email_id','$phone','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Posted successfully!";
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