<html>
<head> 
<script type="text/javascript" src="my2.js">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
 crossorigin="anonymous">
</head>
<body>

<div id="header">
<h1>First PHP Example</h1>

</div>

<div id="menu">
  <button class="btn btn-primary" type="button" onclick="loadPage('client1.html')">Client side</button>
  <button class="btn btn-danger"type="button" onclick="loadPage('client.php')">Server side</button>
  <button class="btn btn-info" type ="button" onclick="loadPage('array.php')">Array</button>
  <button class= "btn btn-primary" type="button"onclick="loadPage('putEXP.php')">POST</button>
  <button class= "btn btn-primary" type="button"onclick="loadPage('getEXP.php')">GET</button>
  <button class= "btn btn-primary" type="button"onclick="loadPage('Objects.php')">Objects</button>
  <button class= "btn btn-primary" type="button"onclick="loadPage('form_project1.php')">Form</button>


</div>

<div id="content" class="container"> 
  
</div>
  <?php
   $theButton=$_POST['btnSend'] ;

if(isset($theButton))
{
$chosen=$_POST['country'];
echo 'You have chosen: '.$chosen ;
}


?>


<div id="footer">
<hr> OAMK 2017
</div>
</body>



</html>