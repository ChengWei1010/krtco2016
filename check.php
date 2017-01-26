<?php
session_start();
if($_SESSION['token']==true){
	echo "true";
}else{
	echo "false";
}
unset($_SESSION['token']);
?>