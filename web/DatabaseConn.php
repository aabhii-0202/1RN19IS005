<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'evm';


$conn = mysqli_connect($server,$username,$password,$db);

if($conn){
    // echo "Connection Successful";

?>
<script> alert('Connetion Successful') </script>
<?php


}
else {
    echo "NO connection";
}

?>