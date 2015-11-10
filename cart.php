<?php
	include("include/db_connect.php"); 
    include("functions/functions.php");    
    session_start();
    include("include/auth_cookie.php");
    //unset($_SESSION['auth']);

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="/js/shop-script.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="/trackbar/jquery.trackbar.js"></script>
    <script type="text/javascript" src="/js/TextChange.js"></script>
    <title>������� �������</title>
</head>
<body>
<span id="okok"></span>
<div id="block-body">
<?php	
    include("include/block-header.php");    
?>
<div id="block-right">
<?php	
    include("include/block-category.php");
    include("include/block-parameter.php");   
    include("include/block-news.php");  
?>
</div>
<div id="block-content">

<?php
	
    $action = clear_string($_GET["action"]);
    switch($action)
    {
        case 'oneclick':
        
        echo '        
        <div id="block-step">        
        <div id="name-step">        
        <ul>
        <li><a class="active">1. ������� �������</a></li>
        <li><span>&rarr;</span></li>
        <li><a>2. ���������� ����������</a></li>
        <li><span>&rarr;</span></li>
        <li><a>3. ����������</a></li>                
        </ul>        
        </div>        
        <p>��� 1 �� 3</p>
        <a href="cart.php?action=clear">��������</a>        
        </div>        
        ';
        
        echo '        
        <div id="header-list-cart">        
        <div id="header1">�����������</div>
        <div id="header2">������������ ������</div>
        <div id="header3">���-��</div>
        <div id="header4">����</div>        
        </div>        
        ';
        
        echo '
        
        <div class="block-list-cart">
        
        <div class="img-cart">
        <p align="center"><img src="" width="" heigh="" /></p>
        </div>
        
        <div class="title-cart">
        <p><a href="">��������</a></p>
        <p class="cart-mini_features">����������������<br>
        ��������������������������������<br>����������������</p>
        </div>
        
        <div class="count-cart">
        <ul class="input-count-style">
        
        <li>
        <p align="center" class="count-minus">-</p>
        </li>
        
        <li>
        <p align="center"><input class="count-input" maxlength="3" type="text" /></p>
        </li>
        
        <li>
        <p align="center" class="count-plus">+</p>
        </li>
        
        </ul>
        </div>
        
        <div class="price-product"><h5><span class="span-count">1</span> x <span>10000 ���</span></h5><p>10000 ���</p></div>
        <div class="delete-cart"><a href=""><img src="/images/bsk_item_del.png"/></a></div>
        
        <div id="bottom-cart-line"></div>
        </div> 
        
        
        ';
        
        break;
        
        case 'confirm':
        
        echo '        
        <div id="block-step">        
        <div id="name-step">        
        <ul>
        <li><a>1. ������� �������</a></li>
        <li><span>&rarr;</span></li>
        <li><a class="active">2. ���������� ����������</a></li>
        <li><span>&rarr;</span></li>
        <li><a>3. ����������</a></li>                
        </ul>        
        </div>        
        <p>��� 1 �� 3</p>
        <a href="cart.php?action=clear">��������</a>        
        </div>        
        ';
        
        break;
        
        case 'completion':
        
        echo '        
        <div id="block-step">        
        <div id="name-step">        
        <ul>
        <li><a>1. ������� �������</a></li>
        <li><span>&rarr;</span></li>
        <li><a>2. ���������� ����������</a></li>
        <li><span>&rarr;</span></li>
        <li><a class="active">3. ����������</a></li>                
        </ul>        
        </div>        
        <p>��� 1 �� 3</p>
        <a href="cart.php?action=clear">��������</a>        
        </div>        
        ';
        
        break;
        
        default:
        
        break;
    }
?>

</div>
<?php	
    include("include/block-footer.php");          
?>
</div>

</body>
</html>