<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student_db';
$conn = new mysqli($servername,$username, $password, $dbname);
if(!$conn){
    echo "Connection failed";
}
else{
    echo "connected successfully";
}

?>