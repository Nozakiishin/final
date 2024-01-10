<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('insert into Racehorse(racehorse_name,fathername,gender,birthday) values (?,?,?,?,)');
if(empty($POST['recehorse_name'])){
    echo '競走馬名名を入力してください';
    
}
?>
<?php require 'footer.php'; ?>