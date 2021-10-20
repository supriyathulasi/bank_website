<<!doctype html>
<html>
    
<head>
    
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    
    <style>
         @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Montserrat');
         @import url('https://fonts.googleapis.com/css?family=Carter+One|Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Montserrat');
        body{
           background-image:url(bank.jpg);
            background-repeat: no-repeat;
           width: 100%;
            height: auto;
             overflow: hidden;
            background-size: cover;  
            
        }   
        button{
            height: 50px;
            width: 200px;
            border-radius: 20px;
            color:black;
            background-color: pink;
            font-family: "Josephin Sans";
            font-weight: bold;
            font-size: 14px;
            
        }
        #one{
            margin-top: 250px;
            margin-left: 140px;
            
        }
        #two{
            margin-left: 150px;
            margin-top: 30px;
        }
        #three{
            margin-left: 150px;
            margin-top: 30px;
        }
        a{
            text-decoration: none;
            color:black;
        }
        </style>
        <button id="one" type="submit"><a href="customer.php">VIEW CUSTOMERS</a></button><br>
        <button id="two"type="submit"><a href="new.php">MAKE TRANSACTION</a></button><br>
        <button id="three"><a href="thistory.php"> TRANSACTION HISTORY</a></button>
</html>