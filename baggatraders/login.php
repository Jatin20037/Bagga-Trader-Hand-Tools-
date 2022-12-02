<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href= "contact us.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div id = "header1">
 <div id = "socialmediabar">
   
    <span class  = "iconcont">
        
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-youtube-play"></i>
</span>

</div>
    <div id = "navbar">   

        
        
       
</div>
</div>

<div id = "header2">
 <div id = "socialmediabar">
   
    

</div>
    <div id = "navbar">   
    <img src ="assets/logo/btlogo.png" id = "logo">
   
</div>
</div>
<div id = "topbanner">
<div id = "subtopbanner">
    
</div>        
</div> 

<form method = "post" STYLE = "position:absolute; top:30%;" ID= "signin">
    <center>
    <span id = "heading">S I G N&nbsp&nbsp&nbspI N</span><br><br><br>
</center>
<input type = "text" placeholder = "CREATE USERNAME" class = "input" name = "genusername"><br><br>
    <input type = "contact" placeholder = "ENTER CONTACT NO" class = "input" name = "contact"><br><br>
<input type = "email" placeholder = "ENTER EMAIL ID" class = "input" name = "mail"><br><br>
<input type = "password" placeholder = "CREATE PASSWORD" class = "input" name = "genpassword"><br><br>
<span style = "color:orangered;display:none;" id = "message2">Username Already Exists</span>
<center>
<button style = "padding:10px;background:none;border:1px solid black;" name = "signin">S I G N&nbsp&nbsp&nbspI N</button>
<BR><BR>
ALREADY HAVE AN ACCOUNT? <SPAN id = "clickhere" style= "cursor:pointer;color:skyblue">CLICK HERE</SPAN>
</center>
</form>

<form method = "post" STYLE = "position:absolute; top:30%;;DISPLAY:NONE;" id = "login">
    <center>
    <span id = "heading">S I G N&nbsp&nbsp&nbspI N</span><br><br><br><br>
</center>
<input type = "text" placeholder = "ENTER USERNAME" class = "input" name = "username"><br><br>
 
<input type = "password" placeholder = "ENTER PASSWORD" class = "input" name = "password"><br><br>
<span style = "color:orangered;display:none;" id = "message">Invalid Password or Username</span>
<center>
<button style = "padding:10px;background:none;border:1px solid black;" name="login">L O G&nbsp&nbsp&nbspI N</button>
<BR><BR>
WANT TO REGISTER AS NEW? <SPAN id = "clickhere2" style= "cursor:pointer;color:skyblue">CLICK HERE</SPAN>
</center>
</form>
<script>
var clickhere = document.getElementById("clickhere");
var clickhere2 = document.getElementById("clickhere2");
var signin = document.getElementById("signin");
var login = document.getElementById("login");
clickhere.addEventListener("click",()=>{
    signin.style.display="none";
    login.style.display="block";
})
clickhere2.addEventListener("click",()=>{
    login.style.display="none";
    signin.style.display="block";
})
</script>
</body>
</html>

<?php
session_start();
 $con = mysqli_connect("localhost","root","","baggatrad_bagga");
 
if(isset($_POST["login"]))
{
$username = $_POST["username"];
$password = $_POST["password"];
$query = sprintf("select * from users where username = '$username'");
 $connectt = mysqli_query($con,$query);
 $dataa = mysqli_fetch_assoc($connectt);
 if($dataa["username"]!=$username || $dataa["password"]!=$password)
 {
    echo "<script>var message = document.getElementById('message');
    console.log(message);
    message.style.display='block';
    login.style.display='block';
    signin.style.display='none'
    function fun()
    {message.style.display='none'
    }
    setTimeout(fun,7000);
    </script>";
 }
else{
    $_SESSION["username"] = $dataa["username"];
   
   if($_SESSION["username"]!="")
   {
    header("Location:listings.php");

   }
  
}
}




if(isset($_POST["signin"]))
{
$username2 = $_POST["genusername"];
$password2 = $_POST["genpassword"];
$mail = $_POST["mail"];
$contact = $_POST["contact"];
$query = sprintf("select * from users where username = '$username2'");
 $connectt = mysqli_query($con,$query);
 $dataa = mysqli_fetch_assoc($connectt);
 if($dataa!="")
 {
    echo "<script>var message2 = document.getElementById('message2');
    console.log(message2);
    message2.style.display='block';
    
   
    function fun()
    {message2.style.display='none'
    }
    setTimeout(fun,7000);
    </script>";
 }
else{
    $query2 = "insert into users values ('$username2','$contact','$mail','$password2')";
    $connectt2 = mysqli_query($con,$query2);
    

    $query3 = "create table cart_{$username2}(product varchar(50),brand varchar(7))";
    $connectt3 = mysqli_query($con,$query3);
    

    $_SESSION["username"] = $username2;
   
   if($_SESSION["username"]!="")
   {
    header("Location:listings.php");

   }
   
}
}

?>