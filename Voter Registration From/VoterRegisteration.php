<?php

$conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');

if ($conn) {
    echo "Connection successful";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

?>
