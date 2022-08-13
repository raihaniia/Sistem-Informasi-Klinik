<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1>User Login</h1>

<?php 
foreach ($password as $user){
 	echo "$user->id"; 
	echo "<br>";
	echo "$user->username";
	echo "<br>";
	echo "$user->password";

}

 ?>
