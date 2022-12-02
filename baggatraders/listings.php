<?php
session_start();
$username = $_SESSION["username"] ;
error_reporting(0);
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
    <link rel="stylesheet" href= "listings.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div id = "header1" style = "z-index:10;">
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
        
    <a href="aboutus.php"><span class = "navigationbtn">A B O U T&nbsp&nbsp&nbspU S</span></a>
        <div class="navigationbtn">
  <span>C A T A L O G U E</span>
  <div class="dropdown-content">
  <BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue1">S T A N L E Y&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue4">T A P A R I A&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue3">T U F T U L&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue5">T S T O P&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue2">H I L T I&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  </div>
</div>

<div class="navigationbtn">
  <span>B R A N D S</span>
  <div class="dropdown-content">
  <BR><BR>
  <a href = "listings.php?brand=stanley" class = "catalogues">S T A N L E Y</a><BR><BR>
  <a href = "listings.php?brand=taparia" class = "catalogues">T A P A R I A</a><BR><BR>
  <a href = "listings.php?brand=tuftul" class = "catalogues">T U F T U L</a><BR><BR>
  <a href = "listings.php?brand=karcher" class = "catalogues">K A R C H E R</a><BR><BR>
  <a href = "listings.php?brand=hilti" class = "catalogues">H I L T I</a><BR><BR>
  <a href = "listings.php?brand=eastman" class = "catalogues">E A S T M A N</a><BR><BR>
  </div>
</div>

<span class = "navigationbtn">C O N T A C T&nbsp&nbsp&nbspU S</span>
        <a href="cart.php" id = "cart" class = "navigationbtn"><span><i class="fa fa-shopping-cart" style = "font-size:3rem;"></i></span></a>


        <a href="login.php" id = "login"  class = "navigationbtn"><span><i class = "fa fa-user-circle" style = "font-size:3rem;"></i></span></a>

        
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

<div style = "width:100%;">
    <img style = "width:100%;height:70%;" id = "banner">
</div>
<div id = "panel">
<div class ="container">
<span class = "row">
<span class = "col-md-6">
    <center>
<span CLASS = "totals"><span id ="catmeter"></span><br>C A T E G O R I E S</span>
</center>
</span>
<span class = "col-md-6">
<center>
<span CLASS = "totals"><span id ="prodmeter"></span><br>P R O D U C T S</span>
</center>
</span>

</span>    
</div>
</div>
 
<div id = "panel2">
<!-- <form>
<select id = "selectcategory">
    <option>CHOOSE CATEGORY</OPTION>
</select>    
<button type = "submit" id = "search">S E A R C H</button>
</form>     -->
<script>
function caller(a,b)
{
    document.cookie="cartprod="+[a];
    document.cookie="cartbrand="+[b];
}
var login = document.getElementById("login");
var logindrop = document.getElementById("logindropdown");
</script>
</div>
    <div class = "container" >
<span class = "row" id = "productrow" style = "background:white;">
</span>

</div>

</body>
</html>
<?php
$brand = $_COOKIE["brand"];
 $con = mysqli_connect("localhost","root","","baggatrad_bagga");
 $query = sprintf("select * from $brand");
 $connectt = mysqli_query($con,$query);
 $num = mysqli_num_rows($connectt);


 $query2 = sprintf("select * from category");
 $connectt2 = mysqli_query($con,$query2);
 $num2 = mysqli_num_rows($connectt2);

 $query3 = sprintf("select * from brands where name = '$brand'");
 $connectt3 = mysqli_query($con,$query3);
 $dataa3 = mysqli_fetch_assoc($connectt3);


 echo"<script>var text3 = document.createTextNode($num);
 prodmeter.appendChild(text3);
 var text4 = document.createTextNode($num2);
 catmeter.appendChild(text4);

 var banner = document.getElementById('banner');
 console.log(banner);
banner.src = '$dataa3[banner]';
 </script>";
 for($i = 0;$i<$num;$i++)
 {$dataa = mysqli_fetch_assoc($connectt);
echo "
<script>
var ancor = document.createElement('a');
ancor.style.textDecoration='none';
ancor.style.color='black';
ancor.href = 'proddesc.php?brand=$brand&prod=$dataa[title]';
var productrow = document.getElementById('productrow');
var prodmeter = document.getElementById('prodmeter');
var catmeter = document.getElementById('catmeter');
var col = document.createElement('span');
col.className = 'col-md-3';
var div = document.createElement('div');
div.className='card';
div.style.border='none';
ancor.appendChild(div);
var div2 = document.createElement('div');
div2.className='card-body';
var img = document.createElement('img');
img.className='card-img-top';
var h5 = document.createElement('h5');
h5.className='card-title';
var button = document.createElement('button');
productrow.appendChild(col);
col.appendChild(ancor);
div.appendChild(img);
div.appendChild(div2);
var div3 = document.createElement('div');
var form = document.createElement('form');
div2.appendChild(div3);
div3.appendChild(h5);
div3.appendChild(form);
form.appendChild(button);
form.method='get';
button.onclick = ()=>caller('$dataa[title]','$brand');
button.className = 'addtocart';
button.name = 'cart';

var br1 = document.createElement('br');
var br2 = document.createElement('br');
div2.appendChild(br1);
div2.appendChild(br2);
var text1 = document.createTextNode('$dataa[title]');
var text2 = document.createTextNode('ADD TO CART');



div3.style.overflow='hidden';
div3.style.whiteSpace='nowrap'
h5.appendChild(text1);
button.appendChild(text2);

img.src='assets/products/'+'$brand'+'/$dataa[pic]';
</script>
";



 }
 if(isset($_GET["cart"]))
{
    if( $username=="")
    {
        echo "<script>alert('Kindly sign-in to continue');</script>";
        
    }
    
   else{
    $data1 = $_COOKIE["cartprod"];
    $data2 = $_COOKIE["cartbrand"];
   
    $query4 = "insert into cart_{$username} values ('$data1','$data2')";
    $connectt4 = mysqli_query($con,$query4);
    
   }
    

}
$query5 = sprintf("select * from catalogue");
$connectt5 = mysqli_query($con,$query5);
for($v=1;$v<6;$v++)
{
$dataa5 = mysqli_fetch_assoc($connectt5);
echo "<script>
document.getElementById('catalogue'+$v).href = 'assets/catalogues/$dataa5[data]';
</script>";

}
?>