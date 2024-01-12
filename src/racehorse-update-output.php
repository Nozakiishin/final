<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update Racehorse set racehorse_name=?, fathername=? gender=?,birthday=TO_DATE(?, "YYYY-MM-DD")  where racehorse_id=? ');
// if(empty($POST['racehorse_name'])){
//     echo '競走馬名を入力してください';   
// }else if(empty($POST['fathername'])){
//     echo '父名を入力してください';   
// }else if(empty($POST['gender'])){
//     echo '性別を入力してください';   
// }else if(empty($POST['birthday'])){
//     echo '年月日を入力してください';   
// }
// else if(
    $sql->execute([$_POST['racehorse_name'],$_POST['fathername'],$_POST['gender'],$_POST['birthday'],$_POST['racehorse_id']]);
    // ){
    // echo '追加しました。';   
// }else {
    // echo '追加できませんでした。';
// }

?>
<?php
foreach($pdo->query('select * from Racehorse') as $row){
    echo '<p>';
    echo $row['racehorse_name'],':';
    echo $row['fathername'],':';
    echo $row['gender'],':';
    echo $row['birthday'],':';
    echo '</p>';
}

?>
    <form action="index.html" method="post">
        <button type="submit">ホームに戻る</button>
    </form>
<?php require 'footer.php'; ?>