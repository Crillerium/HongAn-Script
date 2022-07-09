<?php
include('script.php');
if(isset($_GET['string'])&&$_GET['string']!=""&&$_GET['action']=="core"){
echo core($_GET['string']);
}
else if(isset($_GET['string'])&&$_GET['string']!=""&&$_GET['action']=="match"){
echo match($_GET['string'],$_GET['secret']);
}
else{
echo info();
}
?>