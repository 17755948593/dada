<?php
require "./common/mysql.php";

$sql='SELECT username FROM users WHERE uid="'.$_SESSION['uid'].'" LIMIT 1';
$result=$mysql->query($sql);
$r=$result->fetch_array(MYSQLI_ASSOC);
foreach ($r as $key=>$value ){
    $$key=$value;
}

$sql='INSERT INTO share(picture,detail,title,tag,uploadtimes,username) VALUES("'.$_POST["picture"].'","'.$_POST["detail"].'","'.$_POST["title"].'","'.$_POST["tag"].'","'.date('Y-m-d H:i:s').'","'.$username.'")';
$result=$mysql->query($sql);

if($result){
    echo json_encode(['r'=>'ok']);
}else{
    echo json_encode(['r'=>'fail']);
}