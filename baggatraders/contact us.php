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

    <span id = "navigation">
        
        
       
    </span>
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

<form method = "post" STYLE = "position:absolute;width:30%;left:35%;" id = "form">
    <center>
    <span id = "heading">C O N T A C T&nbsp&nbsp&nbspU S</span><br><br><br>
</center>
    <input type = "contact" placeholder = "ENTER CONTACT NO" class = "input" name = "contact"><br><br>
<input type = "email" placeholder = "ENTER EMAIL ID" class = "input" name = "mail"><br><br>
<textarea placeholder = "ENTER MEASSGE" class = "input" style = "height:15rem" name = "query"></textarea><br><br>
<center>
<button style = "padding:10px;background:none;border:1px solid black;" name = "post">A S K&nbsp&nbsp&nbspN O W</button>
</center>
</form>
<?php
 $con = mysqli_connect("https://www.baggatraders.com:2222","baggatrad","Sudhir@1962","baggatrad_bagga");
 if($con)
 {
    echo "connected";
 }
if(isset($_POST["post"]))
{
 $contact = $_POST["contact"];
 $mail = $_POST["mail"];
 $query = $_POST["query"];   


 $query = sprintf("insert into query values('$contact','$mail','$query')");
 $connectt = mysqli_query($con,$query);

}



?>
</body>
</html>
