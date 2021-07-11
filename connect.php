<html>
<body>

<?php

$dbname = 'car';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

$connet = $mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$connect){
    echo "Error: " . $mysqli_connect_error();
    exit();
}

echo "Connection Successful!<br><br>"

$data = 0;

if( $data < 100){
    
   $uuid++;
}
  

$query = "INSERT INTO  record (uuid) VALUES (uuid);
$result = mysqli_query($connect, $query);

echo "Record Added"

?>

</body>
</html>