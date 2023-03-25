
<?php
session_start();

include ("connection.php");
    
    if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    $query = "INSERT INTO project (Name,Email,Message) values ('$Name','$Email','$Message')";
    if (mysqli_query($con, $query)) {
        echo 'Feedback add successfully';
    }else{
        echo 'failed';
    }
}


