# 概述
加密数据在各大领域中都起到了重要作用，而怎样才能使数据更安全已经成为了一种老生常谈的话题。  

为了对抗暴力破解加密数据，HongAn Script就是一次大胆的尝试。

# 原理
HongAn Script通过结合md5加密以及sha256加密协议，并加入其独具特色的二次加密方式。相较于md5和sha256加密协议，其反暴力破解能力更加卓越。

# 使用方法
1.下载本仓库

2.在你的php项目中引用script.php: 
include('script.php');

3.函数使用方法:  
info();
运行该函数会输出脚本信息，可用于检测脚本是否引用成功。

core($string);
运行该函数会输出参数$string加密后的值。

match($string,$secret);
运行该函数会将参数$string加密后的值与参数secret进行比较。
若相同，则输出true
若不相同，则输出false

# 示例
下载并访问本仓库中的index.php
参数说明:  
action(必选):  
可选值:  
core / match  
作用:  
core对应函数  
core($string);  
  
match对应函数  
match($string,$secret);  

string(必选):  
此处为待加密内容  

secret(可选):  
此处为加密后的内容  
可在函数match($string,$secret); 中使用  

注:在该示例中若全不选则默认输出 info();  
