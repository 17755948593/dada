<?php
//第一步：创建数据库连接
$mysql=new mysqli('localhost','root','root','data',3306);
//第二步：设置编码
$mysql->query('SET NAMES UTF8');