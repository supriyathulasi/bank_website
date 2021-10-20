<!DOCTYPE html>
</html>
<head>
    <style>
          @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Montserrat');
       /* body{
           background-image:url(bank.jpg);
            background-repeat: no-repeat;
           width: 100%;
            height: auto;
             overflow: hidden;
            background-size: cover;  
           
        } */
        .background {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
      width: 100%;
      height: 100%;
      /*-webkit-filter: blur(10px); 
      filter: blur(7px);*/
      
      box-shadow: 7px 7px 60px #000;
                background-color:rgba(100,100,100,0.6);
      
      
      color:black;
      }
     
     

        }  
        .table{
            margin-top: 800px;
            text-align: center;
            align:center;
        }
        .container{
            align:center;
        }
        td{
            width:200px;
            background-color:pink;
            color:black;
            align:center;
        }
        tr{
            width:40px;
            height: 70px;
            
        }
        th{
            background-color:lightskyblue;
        }
        form{
            align-content: center;
            margin-left: 300px;
            margin-top: 100px;
            color:white;
        }
        #box{
            height:40px;
            width:200px;
            border-radius: 10px;
            margin-bottom: 40px;
            
        }
        .button{
            height:40px;
            width:150px;
            border-radius: 10px;
            margin-left: 110px;
            margin-top: 5px;
            background-color: pink;
            color:#000;
            font-family:"Josephin Sans";
            font-size: 16px;
            box-shadow:0 4px lightblue;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            border:none;
            margin-bottom: 30px;

        }
        #trans{
           
            color:white;
            font-weight: bold;
            font-size: large;
        }


       
        
        </style>
       
<title>customers</title>
</head>
<body>
<div>
            <img class="background" src="bank.jpg">
</div>

<?php
include_once "config1.php";
            if(isset($_GET['submit'])){
                $fid=$_GET['id'];
                $gid=$_GET['id'];
                $gamount=$_GET['amount'];
                if(($gamount)<0)
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("error-negative value")';
                    echo '</script>';
                }
            
        
                else if($gamount==0)
                {
                    echo '<script type="text/javascript">';
                    echo'alert("error- 0 balance")';
                    echo'</script>';
                }
                $sql="SELECT balance FROM user WHERE id='$gid'";
                //$query="SELECT balance FROM user WHERE idf='$fid'";
                $total=0;
                $res=$conn->query($sql);
               // $res1=$conn->query($query);
                while($rows=mysqli_fetch_assoc($res)){
                    $am = $rows['balance'];
                    $total = $am+$gamount;
                    $ded=$am-$gamount;
                    
                    
                }
                
                $db="UPDATE user SET balance='$total' WHERE id='$gid'";
                //$dbb="UPDATE user SET balance='$ded' WHERE idf='$fid'";
                $res=$conn->query($db);
               // $res1=$conn->query($dbb);
               
        
        }

    ?>

    
<form method="get" > 
<label id="from">FROM A/C : </label>
<input type="text" name="idf" id="box"><br>
<label id="from">TO A/C: &nbsp;  &nbsp; </label>
<input type="text" name="id" id="box"><br>
<label id="from">AMOUNT: </label>
<input type="number" name="amount" id="box"><br>
<button name="submit" class="button">transfer</button>

        </form>




<?php



?>
<?php
       include 'config1.php';
       if(isset($_GET['submit'])){
           
        $fid=$_GET['id'];
        $gid=$_GET['id'];

        $sql="SELECT * FROM user WHERE id='$gid'";
        $result=mysqli_query($conn,$sql);
       
        
       

       while($rows=mysqli_fetch_assoc($result)){
            
        
        ?>
        <div class="container">
        <marquee width="60%" direction="right" height="100px" id="trans">
TRANSACTION SUCCESFUL!
</marquee>
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
            <table border="1px solid black" cell spacing="0" align="center" class="table">
        
            <thead style="color:black;">
        <tr>
            <th scope="col" class="text-centre py-2">ACCOUNT NO</th>
            <th scope="col" class="text-centre py-2">ACCOUNT HOLDERr</th>
            <th scope="col" class="text-centre py-2">EMAILID</th>
            <th scope="col" class="text-centre py-2">ACCOUNT BALANCE</th>
        </tr></thead>
        <tbody>
    <tr style="color:black;">
            <td class="py-2"><?php echo $rows['id']?></td>
            <td class="py-2"><?php echo $rows['name']?></td>
            <td class="py-2"><?php echo $rows['email']?></td>
            <td class="py-2"><?php echo $rows['balance']?></td>
           <!-- <td><a href="?id=<?php echo $rows['id'];?>"><button type="button" class="btn" style="background-color:blue;">-->
</tr>  
<?php
       }
}
?>  
    </tbody>
</table>
        </div>
    </div>
</div>
    </div>


</body>
</html>