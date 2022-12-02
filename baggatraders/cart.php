<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href= "cart.css">   
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
    <img src ="assets/logo/btlogo.png" id = "logo">
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
<br><br><br>   
    <div class = "container" style = "border-radius:5px;background:white;">
        <center>
<table id = "cart" style = "width:60%">
<tr id = "heading">
<th><center>Product</center></th>
<th><center>Brand</center></th>
<th><center>Action</center></th>
</tr>
</table>
</center>
<center>
    <form method = "get">
    <button name = "post" class = "addtocart">Submit Quotation</button>
</form>
</center>
</div>
</body>
</html>
<?php
session_start();
 $con = mysqli_connect("localhost","root","","baggatrad_bagga");


 $query3 = sprintf("select * from cart_{$_SESSION['username']}");
 $connectt3 = mysqli_query($con,$query3);

 $num3 = mysqli_num_rows($connectt3);

 for($i = 0;$i<$num3;$i++)
 {$dataa = mysqli_fetch_assoc($connectt3);

echo "
<script>
function caller(a){
document.cookie='remove='+a;
console.log(a);

}    

var cart = document.getElementById('cart');
var row = document.createElement('tr');
var td1 = document.createElement('td');
var td2 = document.createElement('td');
var td3 = document.createElement('td');
var center = document.createElement('center');
var text1 = document.createTextNode('$dataa[product]');
var text2 = document.createTextNode('$dataa[brand]');
var text3 = document.createTextNode('Remove');
var bt = document.createElement('button');
var frm = document.createElement('form');
row.appendChild(td1);
row.appendChild(td2);
row.appendChild(td3);
cart.appendChild(row);
td1.appendChild(text1);
td2.appendChild(text2);
td3.appendChild(frm);
frm.appendChild(center);
center.appendChild(bt);
bt.className = 'addtocart';
bt.name='remove';
row.id = '$dataa[product]';
bt.onclick= ()=>caller('$dataa[product]');
bt.appendChild(text3);


</script>
";

 
 }
 if(isset($_GET["remove"]))
{
    
    $data1 = $_COOKIE["remove"];
    
   echo "<script>document.getElementById('$data1').style.display='none';</script>";
    $query4 = "delete from cart_{$_SESSION['username']} where product = '$data1'";
    $connectt4 = mysqli_query($con,$query4);
    
   
    

}
if(isset($_GET["post"]))
{
    
    
    
  
    $query4 = "insert into quotation values('$_SESSION[username]')";
    $connectt4 = mysqli_query($con,$query4);
    $query5 = "select * from actions where particular = 'received'";
    $connectt5 = mysqli_query($con,$query5);
    $dataa5 = mysqli_fetch_assoc($connectt5);
    
    $query6 = "update actions set data = $dataa5[data]+1 where particular = 'received'";
    $connectt6 = mysqli_query($con,$query6);
   $monthname =  strtolower(date('F'));

   $query7 = "select * from actions where particular = '$monthname'";
   $connectt7 = mysqli_query($con,$query7);
   $dataa7 = mysqli_fetch_assoc($connectt7);
   
   $query8 = "update actions set data = $dataa7[data]+1 where particular = '$monthname'";
   $connectt8 = mysqli_query($con,$query8);
   
    

}
?>