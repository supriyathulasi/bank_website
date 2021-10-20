
<!doctype html>
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
            float:left;
        }   
        #txt{
            margin-left: 80px;
            font-weight: bolder;
            font-size: 54px;
            font-family:"Josefin Sans";
            color:white;
            margin-top: 100px;
            
        }
        #txt2{
             margin-left: 80px;
            font-weight:normal;
            font-size: 24px;
            font-family:"Josefin Sans";
            color:white;
             }
        #btn{
            background-color:pink;
               opacity: inherit;
            border-style: none;
             margin-left: 80px;
            font-size: 20px;
            width: 250px;
            border-radius: 20px;
                height: 40px;
            color: black;
            font-family:"Josefin Sans";
        }
        #name{
            font-family: "Carter One";
            margin-top:2px;
            font-weight: bold;
            font-size: 20px;
            color:lightskyblue;
            margin-left: 14px;
        }
        
        
        .topnav {
  overflow: hidden;
  
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight: 700;
  font-family:"Josefin Sans";
}

.topnav a:hover {
  background-color: #102A33;
  color: white;
    font-style: bold;
    font-weight: 700;
}

.topnav a.active {
  background-color: #102A33;
  color: white;
    font-weight: 700;
    
}
        
        #link{
            color:black;
            text-decoration: none;
        }

        
    </style>
    
    <body id="body">
        <div class="topnav" style="display:flex">
            <i class='fas fa-piggy-bank' style="font-size: 36px;color:pink;margin-left: 40px;"></i>
            <p id="name">SP BANK</p>
            <a href="#" style="padding-left: 65%;">help</a>
            <a href="#contact">Contact us</a>
            <a href="#about">About us</a>
        </div>
        <div>
            <p id="txt">Accept Payments<br> Everywhere</p>
            <p id="txt2">Meet the payments platform built for any business<br> and every customer journey.</p>
            <button   id="btn" type="submit"><a id="link" href="bank2.php">Start your journey with us</a></button>
            
        </div>
    </body>
</html>
