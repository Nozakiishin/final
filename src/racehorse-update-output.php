<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update Racehorse set racehorse_id=default,racehorse_name=?, fathername=? gender=?,birthday=? where racehorse_id=?');
if(empty($POST['racehorse_name'])){
    echo '競走馬名を入力してください';   
}else if(empty($POST['fathername'])){
    echo '父名を入力してください';   
}else if(empty($POST['gender'])){
    echo '性別を入力してください';   
}else if(empty($POST['birthday'])){
    echo '年月日を入力してください';   
}else if($sql->execute([$_POST['racehorse_id'],$_POST['racehorse_name'],$POST['fathername'],$POST['gender'],$POST['birthday']])){
    echo '追加しました。';   
}else {
    echo '追加できませんでした。';
}

?>
<?php
foreach($pdo->query('select * from Racehorse') as $row){
    echo '<p>';
    echo $row['racehorse_id'],':';
    echo $row['racehorse_name'],':';
    echo $row['fathername'],':';
    echo $row['gender'],':';
    echo $row['bithday'],':';
    echo '</p>';
}

?>
<?php require 'footer.php'; ?>