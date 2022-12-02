<?php
session_start();
$_SESSION["username"] = "";

$username = $_SESSION["username"];  
?>

<html lang="en">
<head>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href= "index.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagga Traders hand tool shop gurgaon</title>
</head>
<body>
<script>
  function caller(a)
  {
    document.cookie="brand="+a;
    window.open("listings.php");
  }
  function caller2(c,d){
    document.cookie="cartprod="+[c];
    document.cookie="cartbrand="+[d];
    console.log("called");
}
  </script>
    <div id = "header1"  data-aos="fade-down" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">
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
        
    <a href="aboutus.php"> <span class = "navigationbtn">A B O U T&nbsp&nbsp&nbspU S</span></a>
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
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('stanley')>S T A N L E Y</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('taparia')>T A P A R I A</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('tuftul')>T U F T U L</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('karcher')>K A R C H E R</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('hilti')>H I L T I</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('eastman')>E A S T M A N</button ><BR><BR>
  </div>
</div>

<a href="contact us.php"><span class = "navigationbtn">C O N T A C T&nbsp&nbsp&nbspU S</span></a>
<a href="login.php"><span class = "navigationbtn"><i class = "fa fa-user-circle" style = "font-size:3rem;"></i></span></a>
    </span>
</div>
</div>

<div id = "header2">
 <div id = "socialmediabar">
   
    

</div>
    <div id = "navbar">   
    
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src ="assets/logo/btlogo.png" id = "logo" style = "float:left;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span  style = "color:black;font-size:5rem;font-weight:bold;position:relative;left:100%;">=</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item">
        <a href="aboutus.php"> <span class = "navigationbtn">A B O U T&nbsp&nbsp&nbspU S</span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Catalogue
          </a>
          <ul class="dropdown-menu">
          <a href = "#" class = "catalogues" id = "catalogue1">S T A N L E Y&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue4">T A P A R I A&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue3">T U F T U L&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue5">T S T O P&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
  <a href = "#" class = "catalogues" id = "catalogue2">H I L T I&nbsp&nbsp&nbspP R I C E&nbsp&nbsp&nbspL I S T</a><BR><BR>
          </ul>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Brands
          </a>
          <ul class="dropdown-menu">
          <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('stanley')>S T A N L E Y</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('taparia')>T A P A R I A</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('tuftul')>T U F T U L</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('karcher')>K A R C H E R</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('hilti')>H I L T I</button ><BR><BR>
  <button class = "catalogues"  style = "border:none;background:none;" onClick = caller('eastman')>E A S T M A N</button ><BR><BR>
          </ul>
        </li>
        <li class="nav-item">
        <a href="contact us.php"><span class = "navigationbtn">C O N T A C T&nbsp&nbsp&nbspU S</span></a>
        </li>

        <li class="nav-item">
        <a href="login.php"><span class = "navigationbtn"><i class = "fa fa-user-circle" style = "font-size:3rem;"></i></span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
</div>
</div>


<div id = "topbannerbg" data-aos="fade-right" data-aos-offset="400" data-aos-delay="2000" data-aos-duration="1000" data-aos-easing="ease-in-out">
<div id = "subtopbannerbg" data-aos="fade-right" data-aos-offset="400" data-aos-delay="3000" data-aos-duration="1000" data-aos-easing="ease-in-out">

</div>
</div>





<div id = "titlecont">
<!-- <span id = "title">
BAGGA<BR><span style = "color:#FFC837;font-family: 'Oswald', sans-serif;">TRADERS</span></span> -->

<IMG SRC = "assets/logo/btlogo.png">
<br><br>
<span style = "color:#202020;font-family: 'Oswald', sans-serif;" id = "subtitle">
Big brand marketing is the most important element in any small and medium-sized business.<br><br>
Let us do the brainstorming and get your branding done right the first time.
</span>
<br><br><br>
<a href= "#maincontainer" ID = "getstarted">
G E T&nbsp&nbsp&nbspS T A R T E D&nbsp&nbsp&nbspN O W
</a>
</div>



<div id = "maincontainer">

<div class = "container-fluid" style = "padding:30px;background:#f5f5f5;">
<BR><BR><BR><BR>
 <div  id ="aboutcont">   
<BR><BR><BR><BR>
<span class = "row ">
<span class = "col-md-6"style = "z-index:1">
<span class = "conthead">W H O&nbsp&nbsp&nbspW E&nbsp&nbsp&nbspA R E</span>
<div id = "aboutdata"  data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">
    
<span style = "font-size:4rem;">W</span>e “BAGGA TRADERS” are Gurugram based Business House that offers Complete Range of Hand Tools, Power Tools, Automotive tools, Safety Equipments, Hardware, Construction Material and many more range of products and services. 
With Expertise and strong history of serving our customers from the last 30 Years, we also deals in specialized tools that help Various Tradesman, Professionals and Engineers to get effective output on their Job Sites.
<br><br>
<a href="aboutus.php" id = "knowabout">K N O W&nbsp&nbsp&nbspM O R E</a>
</div>
</span>
<span class = "col-md-6" style = "z-index:0">
<img src = "assets/aboutdummy.jpg" STYLE = "WIDTH:100%;" data-aos="fade-up" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">
</span>
</span>    
</div>
</div>

<BR><BR><BR><BR>
<div style = "padding:30px;width:100%;"> 
<span class = "conthead">B R A N D S&nbsp&nbsp&nbspW E&nbsp&nbsp&nbspO F F E R</span><BR><BR><BR><BR>
<div class = "brand container-fluid"  data-aos="fade-up" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">

<BR><BR><BR>
<DIV class = "row">
    <span class = "col-md-6">
<img src="assets/logo/stanley.png" class = "brandlogos">
</span>
<span class = "col-md-6">
    
    <span class = "branddata"><span style = "font-size:4rem;">S</span>olid, tried and true. For those willing to get their hands dirty to raise the bar. Because the measure of a pro is the work they leave behind.
</span>
    <br><br><br>
<button class = "viewbrands" onClick =caller("stanley")>V I E W&nbsp&nbsp&nbspN O W</button>

</span>
</div>   
</div>
<br><br>

<br><br>
<span class = "row" data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out" id = "stanleyrow">

</span>
<BR><BR><BR><BR>
<div class = "brand container-fluid" data-aos="fade-down" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">

<BR><BR><BR>
<DIV class = "row">
   
<span class = "col-md-6">
    
    <span class = "branddata"><span style = "font-size:4rem;">D</span>iscover the Kärcher range of Home & Garden and Professional accessories and get the most out of your Kärcher cleaning machine.
</span>
    <br><br><br>
    <button class = "viewbrands" onClick =caller("karcher")>V I E W&nbsp&nbsp&nbspN O W</button>

</span>
<span class = "col-md-6">
<img src="assets/logo/karcher.png" class = "brandlogos">
</span>
</div>   
</div>
<br><br>

<br><br>
<span class = "row" data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out" id = "karcherrow">

</span>
<BR><BR><BR><BR>
<div class = "brand container-fluid" data-aos="fade-up" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">

<BR><BR><BR>
<DIV class = "row">
    <span class = "col-md-6">
<img src="assets/logo/hilti.svg" class = "brandlogos">
</span>
<span class = "col-md-6">
    
    <span class = "branddata"><span style = "font-size:4rem;">O</span>ur collection of tools for saving labour and improving quality when pouring concrete, fabricating sheet metal, and many other everyday tasks on your jobsites
   
</span>
    <br><br><br>
   <button class = "viewbrands" onClick =caller("hilti")>V I E W&nbsp&nbsp&nbspN O W</button>

</span>
</div>   
</div>
<br><br>

<br><br>
<span class = "row"  data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out" id = "hiltirow">

</span>
<BR><BR><BR><BR>
<div class = "brand container-fluid" data-aos="fade-down" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">

<BR><BR><BR>
<DIV class = "row">
    
<span class = "col-md-6">
    
    <span class = "branddata"><span style = "font-size:4rem;">E</span>astman’s advances across industries such as agriculture, consumer goods, personal care, transportation and textiles are helping improve the quality of life for consumers around the world.
</span>
    <br><br><br>
    <button class = "viewbrands" onClick =caller("eastman")>V I E W&nbsp&nbsp&nbspN O W</button>

</span>
<span class = "col-md-6">
<img src="assets/logo/eastman.png" class = "brandlogos">
</span>
</div>   
</div>
<br><br>

<br><br>
<span class = "row" data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out" id = "eastmanrow">

</span>
<BR><BR><BR><BR>
<div class = "brand container-fluid" data-aos="fade-up" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">

<BR><BR><BR>
<DIV class = "row">
    <span class = "col-md-6">
<img src="assets/logo/tuftul.jpeg" class = "brandlogos">
</span>
<span class = "col-md-6">
    
    <span class = "branddata"><span style = "font-size:4rem;">S</span>olid, tried and true. For those willing to get their hands dirty to raise the bar. Because the measure of a pro is the work they leave behind.
</span>
    <br><br><br>
    <button class = "viewbrands" onClick =caller("tuftul")>V I E W&nbsp&nbsp&nbspN O W</button>

</span>
</div>   
</div>
<br><br>

<br><br>
<span class = "row" data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out" id = "tuftulrow">

</span>
<BR><BR><BR><BR>
<div class = "brand container-fluid" data-aos="fade-down" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out">

<BR><BR><BR>
<DIV class = "row">
    
<span class = "col-md-6">
    
    <span class = "branddata"><span style = "font-size:4rem;">S</span>olid, tried and true. For those willing to get their hands dirty to raise the bar. Because the measure of a pro is the work they leave behind.
</span>
    <br><br><br>
    <button class = "viewbrands" onClick =caller("taparia")>V I E W&nbsp&nbsp&nbspN O W</button>

</span>
<span class = "col-md-6">
<img src="assets/logo/taparia.jpg" class = "brandlogos">
</span>
</div>   
</div>
<br><br>

<br><br>
<span class = "row" data-aos="fade-right" data-aos-offset="400" data-aos-delay="4000" data-aos-duration="1000" data-aos-easing="ease-in-out" id = "tapariarow">

</span>
</div>


<div class = "container-fluid" id = "footer">

<div class = "container">
<span class = "row" style = "color:white">
    <span class = "col-md-4">
    <br><br><br>
    Important Link:
    <hr>
Home
<br><br>
About Us
<br><br>
News
<br><br>
Catelogs
<br><br>
Contact Us
</span> 
<span class = "col-md-4">
<br><br><br>
Our Brands:
<hr>
Tstop Tools
<br><br>
Tuftul Tools
<br><br>
Facom Tools
<br><br>
Proto Tools
<br><br>
Stanley Tools
</span> 
<span class = "col-md-4">
<br><br><br>
Get In Touch:
<hr>
 Bagga Traders
      510, Ashok Puri, New Railway Road
      Gurgaon, Haryana, Pin - 122001
      <br><br>
 +91 8130106660, +91 9891073155,
      +91 9891291978
      <br><br>
 baggatraders123@gmail.com
</span> 

</span>
</div>
<br><br><br>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();


  </script>
</body>
<script>
 
     function bg(){
document.body.style.backgroundImage="linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.4)),url('assets/banner1.jpg')";

function bg1(){
document.body.style.backgroundImage="linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.4)),url('assets/banner4.jpg')";
function bg2(){
document.body.style.backgroundImage="linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.4)),url('assets/banner3.jpg')";
function bg3(){
document.body.style.backgroundImage="linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.4)),url('assets/banner2.jpg')";

const tm = setTimeout(bg,3000);

}const tm4 = setTimeout(bg3,5000);

}const tm3 = setTimeout(bg2,5000);

}const tm2 = setTimeout(bg1,5000);
}
const tm1 = setTimeout(bg,5000);


</script>    
</html>
<?php
 $con = mysqli_connect("localhost","root","","baggatrad_bagga");
$query1 = sprintf("select * from catalogue");
$connectt1 = mysqli_query($con,$query1);
for($v=1;$v<6;$v++)
{
$dataa1 = mysqli_fetch_assoc($connectt1);
echo "<script>
document.getElementById('catalogue'+$v).href = 'assets/catalogues/$dataa1[data]';
</script>";
}





?>