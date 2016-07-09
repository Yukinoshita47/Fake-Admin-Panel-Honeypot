<?PHP error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); session_start();if (isset($_POST['tombol-login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
if ($username=="admin"){
if ($password=="admin"){
$_SESSION['username'] = $username;
header("location:process.php");
}
else{
header("location:./?error=1");// error
}
}
else{
header("location:./?error=1");// error
}
}
?>
<!DOCTYPE html>
 
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>LOGIN ADMINISTRATOR</title>
<link rel="icon" type="images/gif" href="adm.png" >
<style>
body {overflow:hidden;background:#fff url(background-texture.png);padding:0px;margin:0 auto}
.container {width:600px;margin:auto;position:relative;overflow:hidden}
.logo {background-size:100%;width:400px;height:100px;margin:auto;
 margin-top:0%;}
 .box-login {margin:auto;height:302px;width:300px;display:block;margin-top:2%;
-moz-border-radius:6px;-webkit-border-radius:4px;-o-border-radius:4px;-ms-border-radius:4px;border-radius:4px;
background:#ececec;padding:10px;border:solid 1px #cccccc;-moz-box-shadow: 0 0 2px #ccc;
-webkit-box-shadow: 0 0 2px #ccc ;
box-shadow: 0 0 2px #ccc;margin-bottom:30px}
.avatar {margin:auto;width:150px;height:150px;background-size:100%;
-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%;}
.avatar img {width:150px;height:150px;background-size:100%;
-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%;}
.avatar:hover{margin:auto;width:150px;height:150px;background:url(img/avatar.png) no-repeat center center;background-size:100%;
-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%;
-moz-box-shadow: 0 0 2px #ccc;-webkit-box-shadow: 0 0 2px #ccc;box-shadow: 0 0 2px #ccc;}
.login input {border:solid 1px #cccccc;padding:5px;font-family:Arial, Helvetica, sans-serif;font-size:16px;
width:90%;margin:auto;margin-bottom:5px;margin-top:5px;color:#999999;padding-left:20px;}
.login-stat {color:#0099FF;font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:22px;}
.login input:hover{border:solid 1px #999999;}
input[type="text"],
input[type="password"]{display: inline-block;height:24px;padding: 5px;font-size: 16px;line-height: 20px;color: #555555;
vertical-align: middle;max-width:90%;padding-left:20px;}
.icon-login{background:#ffffff url(nama.png) no-repeat center left;height:20px;width:20px;display:block}
.icon-pass{background:#ffffff url(key.png) no-repeat center left;height:20px;width:20px;display:block}
input[type=submit],input[type=reset]{border:solid 0px;color:#ffffff;padding:7px;width:100%;cursor:pointer;
border:solid 0px;background:#0099FF;-moz-border-radius:3px;font-family:Arial, Helvetica, sans-serif;letter-spacing:2px;
-webkit-border-radius:3px;-o-border-radius:3px;-ms-border-radius:3px;border-radius:3px;
outline: 0;-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);}
input[type=submit]:hover,input[type=reset]:hover{border:solid 0px;background:#0033FF;outline: 0;-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);}
.footer{background:#000000;height:30px;font-family:Arial, Helvetica, sans-serif;color:#ffffff;position:fixed;width:100%;text-align:center;bottom:0px;}
</style>
</head>
 
<body>
<form action="" name="form-login" method="post">
<div class="container"><div class="logo"></div>
<div class="box-login"><div class="avatar">
<?php if(empty($_SESSION[username])) {  ?>
<img src="adm.png" width="150px" height="150px" /></div>
<div class="login">
<input name="username" type="text" placeholder="Username" id="user" class="icon-login" /></div>
<div class="login">
<input name="password" type="password" placeholder="Password" id="pass" class="icon-pass" /></div>
<div class="login">
<input name="tombol-login" type="submit" id="login" value="LOGIN"/>
</div>
<div class="login-stat">

<?php  if (!empty($_GET['error'])) { if ($_GET['error'] == 1) { echo '<div class="success">User Name dan Password Salah..!</div>';}
else if ($_GET['error'] == 2) { echo '<div class="success">Maaf anda tidak berhak Masuk ke halaman ini, Anda harus Login Terlebih Dahulu..!</div>';}}?></span></div>
</div>
</div>
 
 
<? } else{ ?><img src="adm.png" width="150px" height="150px" /></div>
<div style="font-size:17px;text-align:center;font-family:Arial, Helvetica, sans-serif;line-height:40px">LOGIN SUCCESS</div>
 
<?PHP  } ?>
 
<?php

$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$cookie = $_SERVER['QUERY_STRING'];
$rqst_method = $_SERVER['METHOD'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$fh = fopen('log.txt', 'a');
fwrite($fh, '========================================'."\n");
fwrite($fh, ' THIS HACKER WANT TO TRY HACK YOUR SITE'."\n");
fwrite($fh, '========================================'."\n");
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fwrite($fh, 'Cookie: '."".$cookie ."\n\n");
fwrite($fh, 'Method: '."".$rqst_method ."\n\n");
fwrite($fh, '========================================'."\n");
fwrite($fh, '   MAYBE HE/SHE PLAY IN WRONG PLACE     '."\n");
fwrite($fh, '========================================'."\n");
fclose($fh);
?> 
 
</div>
</div>
</div>
</form>
<div class="footer"> ADMINISTRATOR PANEL </div>
</body>
 

    </html>