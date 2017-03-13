<h2>Array Example</h2>
<?php
$students=array(
array("fname"=>'Ann',"lname"=>'Smith'),
array("fname"=>'Tim'. "lname"=>'Smith'),
array("fname"=>'Lisa', "lname"=>'Jones'),
array("fname"=>'Tom' "lname"=>'Daniels')
);
?>
<h3>Print one name from the array
</h3>
<?php
echo 'The first fristname is '.$students[0]['fname'];
?>