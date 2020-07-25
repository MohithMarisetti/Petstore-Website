<?php

$email_id = $_POST["emailid"];
$pwd = $_POST["password"];

$servername = "";
$username = "";
$password = "";
$dbname = "";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select roleid from clients where email = '$email_id' AND password='$pwd' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
if($row["roleid"]==1)  //Redirect to Business Page
{
echo "
            <script type=\"text/javascript\">
        window.location.href = \"http://mohithmarisetti.uta.cloud/assignment4/login_business.html\";
            </script>
        ";
}//inner if close


elseif($row["roleid"]==2)  // Redirect to Client Page
{
    
    
echo "
            <script type=\"text/javascript\">
       window.location.href = \"http://mohithmarisetti.uta.cloud/assignment4/login_client.html\";
            </script>
        ";
    
}//inner else close
else
{
    echo "Invalid credentials! Please try again";
}

$conn->close();



 ?>