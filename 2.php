<html>
<head>
<title>Array : Union</title>
</head>
<body>
<h1>Array : Union</h1>
<?php
$ar_a=array(1,2,5,7,8);
print "Isi Array \$ar_a <br>" ;
print_r($ar_a);
print" <br>" ;
$ar_b=array("abc",5,7,90);
print"Isi Array \$ar_b<br>" ;
print_r($ar_b);
$gabung=array_merge($ar_a, $ar_b);
print"Isi Array \$gabung <br>" ;
print_r($gabung);
print" <br>" ;
?>
</body>
</html> 