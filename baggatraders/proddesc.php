<?php
session_start();
$username = $_SESSION["username"] ;
error_reporting(0);
 $con = mysqli_connect("localhost","root","","baggatrad_bagga");
 $brands = $_GET["brand"];
 $prod = $_GET["prod"];
$query1 = sprintf("select * from $brands where title = '$prod'");
$connectt1 = mysqli_query($con,$query1);

$dataa1 = mysqli_fetch_assoc($connectt1);

?>

<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href= "proddesc.css"> 
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

<span class = "row" style = "position:absolute;top:15%;width:80%;left:10%;">
    <span class = "col-md-6">
        <img src = "assets/products/<?php echo $brands; ?>/<?php echo $dataa1["pic"]; ?>" style = "width:100%;">
</span>
<span class = "col-md-6" style = "background:white;padding:30px;">
    <span id = "title">
   <?php echo $dataa1["title"]; ?>
</span><br><br>
<span id = "aboutdata">
<?php echo $dataa1["description"]; ?>
</span><br><br><br>
<form method = "get">
<a href = "listings.php" style = "padding:10px;background:none;border:1px solid black;" >K N O W&nbsp&nbsp&nbspM O R E</a>
</form>
</span>
</span>

</body>
</html>
