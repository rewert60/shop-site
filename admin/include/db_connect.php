<?php
defined('myyshop') or die('������� ���!');
$db_host     = 'localhost';
$db_user     = 'admin';
$db_pass     = '11223344';
$db_database = 'db_shop';
$link = mysql_connect($db_host, $db_user, $db_pass) or die("��� ���������� � ��".mysql_error());
//$link = mysql_connect($db_database, $link) or die("��� ���������� � ��".mysql_error());
mysql_select_db($db_database) or die("�� ���� ������������ � ����.");
mysql_query("SET names cp1251");
?>