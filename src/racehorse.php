<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<h1>競走馬一覧</h1>
<?php
$pdo=new PDO($connect, USER, PASS);
foreach($pdo->query('select * from Racehorse') as $row){
    echo '<p>';
    echo $row['racehorse_id'],':';
    echo $row['racehorse_name'],':';
    echo $row['fathername'],':';
    echo $row['gender'],':';
    echo $row['birthday'],':';
    echo '</p>';
}

?>
<from atction="index.html" method="post">
    <button type="submit">ホームに戻る</button>
<?php require 'footer.php'; ?>