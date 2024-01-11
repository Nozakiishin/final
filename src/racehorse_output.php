<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('insert into Racehorse(racehorse_id,racehorse_name,fathername,gender,birthday) values (default,?,?,?,?)');
// if(empty($POST['racehorse_name'])){
//     echo '競走馬名を入力してください';   
// }else if(empty($POST['fathername'])){
//     echo '父名を入力してください';   
// }else if(empty($POST['gender'])){
//     echo '性別を入力してください';   
// }else if(empty($POST['birthday'])){
//     echo '年月日を入力してください';   
//}else 
// if($sql->execute([$_POST['racehorse_id'],$_POST['racehorse_name'],$POST['fathername'],$POST['gender'],$POST['birthday']])){
//     echo '追加しました。';   
// }else {
//     echo '追加できませんでした。';
// }
?>
<?php require 'footer.php'; ?>