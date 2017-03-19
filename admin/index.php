<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adminpanel</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/lain.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>
<div id="wrapper">
    <div class="perlindungan">
    <div id="menu">
     <div class="ribbon-content" style="padding-top:5px;">
     <table width="100%" style="border-bottom:1px dashed #3E5FD0; border-top:1px dashed #3E5FD0;">
  <tr>
    <td align="center"> 
     <table>
      <tr>
       <td><img src="../images/lock.png" width="23" height="23" /></td>
       <td><font face="neo Sans" color="#FFFFFF" size="3">Sign In</font></td>
      </tr>
     </table>
    </td>
  </tr>
</table>
    </div>
    </div>
   </div>
   <div id="kotak-luar">
    <form method="post" action="ceklogin.php">
    <div id="kotak" align="left">
    <font face="Arial, Helvetica, sans-serif" size="+2" color="#FFFFFF">Selamat Datang !</font>
    <br />
    <font face="Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Anda Memasuki Halaman Admin Login</font>
    <center>
     <div id="kotak-dalam" align="center">
      <table cellspacing="15" style="word-break:break-all; word-wrap:break-word;">
       <tr>
        <td><font face="neo Sans" color="#FFFFFF">Username</font></td>
        <td style="padding:5px 5px 5px 5px; background:#25409A; border-radius:3px;"><table cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"><tr><td valign="bottom" style="border-right:1px solid #2946AB; background:#6D86DC"><label style="padding:2px 3px 2px 3px; height:1.5em; width:1.5em;"><img src="../images/icon/user.png" /></label></td><td valign="top"><input type="text" id="userinput" name="username" /></td></tr></table></td>
       </tr>
       <tr>
        <td><font face="neo Sans" color="#FFFFFF">Password</font></td>
        <td style="padding:5px 5px 5px 5px; background:#25409A; border-radius:3px;"><table cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"><tr><td valign="bottom" style="border-right:1px solid #2946AB; background:#6D86DC"><label style="padding:2px 3px 2px 3px; height:1.5em; width:1.5em;"><img src="../images/icon/pass.png" /></label></td><td valign="top"><input type="password" id="userinput" name="password" /></td></tr></table></td>
       </tr>
      </table>
      <table>
       <tr>
        <td>
         <table><tr><td><input type="checkbox" /></td><td><font face="Arial, Helvetica, sans-serif" size="-1" color="#FFFFFF">Remember me on this computer
         </font></td></tr></table>
        </td>
       </tr>
      </table>
     </div>
     <br />
     <table>
      <tr>
      <td><input type="submit" class="button1" value="Login" style="background:linear-gradient(#2946AB, #203F8E); border:1px solid #006; width:80px; height:30px;
      font-family:'neo Sans'; color:#FFF; text-shadow:1px 1px 1px #4B6AD3; border-radius:5px;" />
      </tr>
      </table>
     </center>
    </div>
    </form>
   </div>
</div>
</center>
</body>
</html>
