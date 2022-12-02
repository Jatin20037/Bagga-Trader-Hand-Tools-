<?php
 $con = mysqli_connect("localhost","root","","baggatrad_bagga");
 $query8 = sprintf("select * from actions");
 $connectt8 = mysqli_query($con,$query8);

 $num8 = mysqli_num_rows($connectt8);
for($i=1;$i<=12;$i++)
{ $dataa8 = mysqli_fetch_assoc($connectt8);
echo"
<script>
month$i = $dataa8[data];
</script>
";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
<script src="filesaver.js"></script>
 
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href= "admin.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div id = "sidebar">
<center>
  
    
   <SPAN id = "upload"> UPLOAD PRODUCT</SPAN>
   <br><br><br><br>
<form  method = "get"> <br><br>
  <input type = "file" style = "color:white;" name = "pic"><br><br>
<input type = "text" placeholder="ENTER PRODUCT TITLE" style = "width:70%;border-radius:30px;padding:20px;" name = "title"><br><br>
<SELECT style = "width:70%;border-radius:30px;padding:10px;" name = "brand">
<option>CHOOSE BRAND</option>
<option>STANLEY</option>
<option>KARCHER</option>
<option>EASTMAN</option>
<option>HILTI</option>
<option>TUFTUL</option>
<option>TAPARIA</option>

</SELECT><br><br>
<SELECT style = "width:70%;border-radius:30px;padding:10px;" id = "category" name = "cat">
<option>CHOOSE CATEGORY</option>

</SELECT><br><br>
<Textarea id = "editor" style = "width:70%;border-radius:5px;padding:20px;" placeholder="DESCRIPTION HERE" name = "desc"></textarea>
<br><br>
<button style = "padding:10px;background:none;border:1px solid WHITE;COLOR:WHITE;" name = "postprod">P O S T</button>
</form>
<center>
</div>
<div style = "background:#161d30;width:30%;padding:30px;">
<br> <br><br> <br><br>
<center>
<SPAN id = "upload"> UPLOAD </SPAN>
<form method = "get"> <br><br>
<SELECT type = "text" placeholder="ENTER PRODUCT TITLE" style = "width:70%;border-radius:30px;padding:10px;" name = "cataloguebrand">
<option>CHOOSE BRAND</option>
<option>STANLEY</option>
<option>TSTOP</option>

<option>HILTI</option>
<option>TUFTUL</option>
<option>TAPARIA</option>
</SELECT><br><br>
  <input type = "file" style = "color:white;" name = "catalogue"><br><br>

<br><br>
<button style = "padding:10px;background:none;border:1px solid WHITE;COLOR:WHITE;" name = "postcatalogue">P O S T</button>
</form>

   

</center>
</div>
<script>
    CKEDITOR.replace('desc');
</script>
<div id = "main">
<span class = "row" style = "width:90%;margin:5%;">
<span class = "col-md-4">
<div class = "meter">
<center>
<span class = "readings" id = "userread"></span><br><br>
T O T A L&nbsp&nbsp&nbspU S E R S
</center>
</div>
</span>
<span class = "col-md-4">
<div class = "meter">
<center>
<span class = "readings" id = "quoteread"> </span><br><br>
T O T A L&nbsp&nbsp&nbspQ U O T E S
</center>
</div>
</span>
<span class = "col-md-4">
<div class = "meter">
<center>
<span class = "readings" id = "answerread"></span><br><br>
A N S W E R D&nbsp&nbsp&nbspQ U O T E S
</center>
</div>
</span>

</span>  

<div id = "chart">
<script>
 var options = {
          series: [{
          name: 'Quotes',
          data: [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12]
        }],
          chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val;
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val ;
            }
          }
        
        },
        title: {
          text: 'Monthly Representaion of Recieverd Quotes',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

</script>
</div>
<br><br>
<div CLASS = "container" STYLE = "overflow:auto;height:350px;">
<span style = "font-size:3rem;">RECEIVED</span>
<table STYLE = "WIDTH:100%;" id = "quotetable">
    <tr style = "border-bottom:1px solid black;padding:10px;">
        <th>
            USERNAME
    </th>
    
    <th>
            CONTACT NO
    </th>
    
    <th>
            E-MAIL
    </th>
    
    <th>
            ACTION
    </th>
    </tr>
  
      </table>
    </div>

    <br><br><br>

    <div CLASS = "container" STYLE = "overflow:auto;height:330px;">
<span style = "font-size:3rem;">QUERIES</span>
<table STYLE = "WIDTH:100%;" id = "messagetable">
    <tr style = "border-bottom:1px solid black;padding:10px;">
       
    
    <th style = "width:20%;">
            CONTACT NO
    </th>
    
    <th style = "width:20%;">
            E-MAIL
    </th>
    
    <th>
            MESSAGE
    </th>
    </tr>
  
      </table>
    </div>   
</div>   
<?php
 

 $query = sprintf("select * from category");
 $connectt = mysqli_query($con,$query);
 $num = mysqli_num_rows($connectt);
 for($i = 0;$i<$num;$i++)
 {$dataa = mysqli_fetch_assoc($connectt);
  echo "<script>
  var category =  document.getElementById('category');
var options = document.createElement('option');
var text = document.createTextNode('$dataa[category_col]');
  options.appendChild(text);
  category.appendChild(options);
 </script>
  ";
 }
if(isset($_GET["postprod"]))
{
  $pic = $_GET["pic"];
$title = $_GET["title"];
$brand = $_GET["brand"];
$cat = $_GET["cat"];
$desc  = $_GET["desc"];
$brand = strtolower($brand);

$query2 = sprintf("select c_id from category where category_col = '$_GET[cat]'");
$connectt2 = mysqli_query($con,$query2);
$dataa2 = mysqli_fetch_assoc($connectt2);


$query3 = "insert into $brand values ($dataa2[c_id],'$title','$desc','$pic')";
$connectt3 = mysqli_query($con,$query3);

 }


 if(isset($_GET["postcatalogue"]))
 {
   $data = $_GET["catalogue"];

 $brand = $_GET["cataloguebrand"];

 $brand = strtolower($brand);
 
 
 $query4 = "update catalogue set data = '$data' where brand = '$brand'";
 $connectt4 = mysqli_query($con,$query4);
 
  }
  $query5 = sprintf("select * from users");
  $connectt5 = mysqli_query($con,$query5);
  $dataa5 = mysqli_fetch_assoc($connectt5);
  $num5 = mysqli_num_rows($connectt5);

echo "<script>
var usercount = document.getElementById('userread');
var text = document.createTextNode($num5);
usercount.appendChild(text);
</script>
";


$query6 = sprintf("select * from actions where particular = 'received'");
  $connectt6 = mysqli_query($con,$query6);
  $dataa6 = mysqli_fetch_assoc($connectt6);
  $query7 = sprintf("select * from actions where particular = 'answered'");
  $connectt7 = mysqli_query($con,$query7);
  $dataa7 = mysqli_fetch_assoc($connectt7);

echo "<script>
var userquote = document.getElementById('quoteread');
var useranswer = document.getElementById('answerread');
var text1 = document.createTextNode($dataa6[data]);
var text2 = document.createTextNode($dataa7[data]);
userquote.appendChild(text1);
useranswer.appendChild(text2);
</script>
";


$query9 = sprintf("select * from quotation");
 $connectt9 = mysqli_query($con,$query9);
 $num9 = mysqli_num_rows($connectt9);
for($i=1;$i<=$num9;$i++)
{ $dataa9 = mysqli_fetch_assoc($connectt9);
  $query10 = sprintf("select * from users where username = '$dataa9[username]'");
 $connectt10 = mysqli_query($con,$query10);
 $num10 = mysqli_num_rows($connectt10);

for($x = 0;$x<$num10;$x++)
{
 $dataa10 = mysqli_fetch_assoc($connectt10);
echo"
<script>
function caller(a)
{
    document.cookie='quot='+[a];
   
}
var tr = document.createElement('tr');
tr.style.borderBottom='1px solid black';
var td1 = document.createElement('td');
var td2 = document.createElement('td');
var td3 = document.createElement('td');
var td4 = document.createElement('td');
td1.style.padding='10px';
td2.style.padding='10px';
td3.style.padding='10px';
td4.style.padding='10px';
var button1 = document.createElement('button');
var frm = document.createElement('form');
frm.method = 'get';
button1.name = 'downloadfile';
button1.onclick = ()=>caller('$dataa10[username]');
var text3 = document.createTextNode('$dataa10[username]');
var text4 = document.createTextNode('$dataa10[contact]');
var text5 = document.createTextNode('$dataa10[email]');
var text6 = document.createTextNode('Download');
td1.appendChild(text3);
td2.appendChild(text4);
td3.appendChild(text5);
button1.appendChild(text6);
td4.appendChild(frm);
frm.appendChild(button1);
tr.appendChild(td1);
tr.appendChild(td2);
tr.appendChild(td3);
tr.appendChild(td4);
var quotetable =  document.getElementById('quotetable');
quotetable.appendChild(tr);
</script>
";

}
}




$query11 = sprintf("select * from query ");
 $connectt11 = mysqli_query($con,$query11);
 $num11 = mysqli_num_rows($connectt11);

for($x = 0;$x<$num11;$x++)
{
 $dataa11 = mysqli_fetch_assoc($connectt11);
echo"
<script>

var trmessage = document.createElement('tr');
trmessage.style.borderBottom='1px solid black';
var td5 = document.createElement('td');
var td6 = document.createElement('td');
var td7 = document.createElement('td');

td1.style.padding='10px';
td2.style.padding='10px';
td3.style.padding='10px';


var text6 = document.createTextNode('$dataa11[contact]');
var text7 = document.createTextNode('$dataa11[email]');
var text8 = document.createTextNode('$dataa11[message]');

td5.appendChild(text6);
td6.appendChild(text7);
td7.appendChild(text8);

trmessage.appendChild(td5);
trmessage.appendChild(td6);
trmessage.appendChild(td7);

var messagetable =  document.getElementById('messagetable');
messagetable.appendChild(trmessage);

var jsondata = [];
</script>
";

}
if(isset($_GET["downloadfile"]))
{
  $quot = $_COOKIE["quot"];
  $query12 = sprintf("select * from cart_{$quot}");
  $connectt12 = mysqli_query($con,$query12);
  $num12 = mysqli_num_rows($connectt12);
 for($i=1;$i<=$num12;$i++)
 { $dataa12 = mysqli_fetch_assoc($connectt12);
 
  echo "<script>
  var arrays = {product:'$dataa12[product]',brand:'$dataa12[brand]'};
  jsondata.push(arrays);

  </script>";


 }
echo "<script>
const EXCEL_TYPE = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=UTF-8';
const EXCEL_EXTENSION = '.xlsx';

var workSheet = XLSX.utils.json_to_sheet(jsondata);
const workbook = {
Sheets:{
'data':workSheet
},
SheetNames:['data']
};
const excelBuffer = XLSX.write(workbook,{bookType:'xlsx',type:'array'});
const saverdata = new Blob([excelBuffer], {type: EXCEL_TYPE});
saveAs(saverdata,'myfile'+new Date()+'$quot');
</script>";
$query13 = sprintf("delete from cart_{$quot}");
$connectt13 = mysqli_query($con,$query13);
$query14 = "select * from actions where particular = 'answered'";
$connectt14 = mysqli_query($con,$query14);
$dataa14 = mysqli_fetch_assoc($connectt14);

$query15 = "update actions set data = $dataa14[data]+1 where particular = 'answered'";
$connectt15 = mysqli_query($con,$query15);



}















?>
</body>
</html>




