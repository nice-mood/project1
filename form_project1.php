<h2>Form Examples</h2>

<form  action="index.php" method="post">

    <select class="" name="country">
     <option value="">Choose</option>
     <option value="1">Sweden </option>
     <option value="2">Finland </option>
     <option value="3">Norway </option>

     </select>   
     <input class="btn btn-primary" type="submit" name="btnSend" value="Send">
</form> 

<?php 
$chosen=$_POST['country'];
echo 'You have chosen: '.$chosen ;
?>