<?php 
 include 'config1.php';
?>

<?php

if(isset($_POST['submit']))
{
    $from=$_GET['id'];
    $to=$_POST['to'];
    $amount=$_POST['amount'];
    $sql="SELECT * from user where id=$from";
    $query=mysqli_query($conn,$sql);
    $sql1=mysqli_fetch_array($query);
    $sql="SELECT * from user where id=$to";
    $query=mysqli_query($conn,$sql);
    $sql2=mysqli_fetch_array($query);

    if(($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo 'alert("error-negative value")';
        echo '</script>';
    }

    else if($amount>$sql1['balance'])
    {
        echo '<script type="text/javascript">';
        echo'alert("error-insufficient balance")';
        echo'</script>';
    }
    else if($amount==0)
    {
        echo '<script type="text/javascript">';
        echo'alert("error- 0 balance")';
        echo'</script>';
    }
    else{
        $newbalance=$sql1['balance'] - $amount;
        $sql="UPDATE user set balance=$newbalance where id='$from'";
        mysqli_query($conn,$sql);

        $newbalance=$sql2['balance'] + $amount;
        $sql="UPDATE user set balance=$newbalance where id='$to'";
        mysqli_query($conn,$sql);

        $sender=$sql1['name'];
        $receiver=$sql2['name'];
        $sql="INSERT INTO transaction('sender', 'receiver','balance')VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($conn,$sql);

        if($query){
            echo"<script> alert('transaction is successful');
            window.location='transaction.php';
            </script>";
            }
        $newbalance=0;
        $amount=0;
        }

}
?>
 <!DOCTYPE html>
<html>
<head>
    <title>money transfer</title>
    <style>
        </style>
</head><body>
      
            <?php
        if(isset($_GET['submit'])){
            $sid=$_GET['id'];
            $sql="SELECT * FROM user where id=$sid";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                echo "error";
            }
            $rows=mysqli_fetch_assoc($result);

        }
            ?>
            <div class="container">
            <form method="post" >
                <div>
                <table border="1px solid black" cell spacing="0" align="center" class="table">
        
        <thead style="color:black;">
    <tr>
        <th scope="col" class="text-centre py-2">ACCOUNT NO</th>
        <th scope="col" class="text-centre py-2">ACCOUNT HOLDERr</th>
        <th scope="col" class="text-centre py-2">EMAILID</th>
        <th scope="col" class="text-centre py-2">ACCOUNT BALANCE</th>
    </tr></thead>
    
<tr style="color:black;">
        <td class="py-2"><?php echo $rows['id']?></td>
        <td class="py-2"><?php echo $rows['name']?></td>011
        <td class="py-2"><?php echo $rows['email']?></td>
        <td class="py-2"><?php echo $rows['balance']?></td>
     
</tr> </table></div>
<br><br>
<label style="color:white;"><b>transfer to:</b></label>
<select name="to"  required>
    <option value="">choose account</option>
    <?php
    if(isset($_GET['submit'])){
    $sid=$_GET['id'];
    $sql="SELECT * FROM user where id!=$sid";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo"error";
    }
}
    /*while($rows=mysqli_fetch_assoc($result)){
        ?>
        <option value= "<?php echo $rows['id'];?>" >
        <?php echo $rows['name'];?>(balance:
        <?php echo $rows['balance'];?>)
        </option>
        <?php
    }*/

        ?>
        <div>
</select>
<br>
<label ><b>Enter your id:</b></label>
<input type="number" name="id" required>
<label ><b>amount:</b></label>

<input type="number" name="amount" required>
<br>
<div>
    <button name="submit" type="submit" id="btn">transfer money</button>
</div>
    
            </form>
        </div>
    
</body></html>