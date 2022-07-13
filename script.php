<?php
function info(){
$info = <<<info
脚本名称:HongAn Script<br/>
脚本作者:Crillerium<br/>
info;
return $info;
}
function core($string){
$base64=base64_encode($string);
$sha1=sha1($string);
$md5 = md5($base64.$sha1);
$result = substr($md5,1,17);
return $result;
}
function match($string,$secret){
$base64=base64_encode($string);
$sha1=sha1($string);
$md5 = md5($base64.$sha1);
$result = substr($md5,1,17);
if($result==$secret){
return "true";
}
else{
return "false";
}
}
?>
