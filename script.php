<?php
function info(){
$info = <<<info
脚本名称:HongAn Script<br/>
脚本作者:Crillerium<br/>
版本:v1.0
info;
return $info;
}
function core($string){
$md5=md5($string);
$sha1=sha1($string);
$md5sha1 = md5($md5.$sha1);
$result = substr($md5sha1,1,17);
return $result;
}
function match($string,$secret){
$md5=md5($string);
$sha1=sha1($string);
$md5sha1 = md5($md5.$sha1);
$result = substr($md5sha1,1,17);
if($result==$secret){
return "true";
}
else{
return "false";
}
}
?>