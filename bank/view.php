<?php

require_once 'config.php';

?>

<html>

<body>

<?php
$sql = "SELECT * FROM login";
$result=mysqli_query($conn,$sql);
$rowCount=mysqli_num_rows($result);

if($rowCount>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo $row['username']."<br>";
    }
   }   else{
        echo "No data found";
    }


?>

 
</body>
</html>