<?php
	session_start();
    define('myyshop', true);
    include("include/db_connect.php");
    include("include/functions.php");
    
 if ($_POST["submit_enter"])
 {
    $login = clear_string($_POST["input_login"]);
    $pass = clear_string($_POST["input_pass"]);
    
    if($login && $pass)
    {
        $pass = md5($pass);
        $pass = strrev($pass);
        $pass = strtolower("mb03foo51".$pass."qj2jjdp9");
        
        $result = mysql_query("SELECT * FROM reg_admin WHERE login = '$login' AND pass = '$pass'",$link);
        
        if (mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
            $_SESSION['auth_admin'] = 'yes_auth';
            
            header("Location: index.php");
        }else
        {
            $msgerror = "�������� ����� ��� ������";
        }
    }else
    {
        $msgerror = "��������� ��� ����";
    }
 }
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/style-login.css" rel="stylesheet" type="text/css" />
    

	<title>������ ���������� - ����</title>
</head>
<body>

<div id="block-pass-login">
<?php
	
    if ($msgerror)
    {
        echo '<p id="msgerror">'.$msgerror.'</p>';
    }
    
?>
<form method="post">

<ul id="pass-login">
<li><label>�����</label><input type="text" name="input_login"/></li>
<li><label>������</label><input type="password" name="input_pass"/></li>
</ul>

<p align="right"><input type="submit" name="submit_enter" id="submit_enter" value="����"/></p>

</form>



</div>

</body>
</html>