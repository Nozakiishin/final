<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<h1>競走馬一覧</h1>
<?php
$pdo=new PDO($connect, USER, PASS);
foreach($pdo->query('select * from Racehorse') as $row){
    echo '<p>';
    echo $row['recehorse_name'],':';
    echo $row['fathername'],':';
    echo $row['gender'],':';
    echo $row['bithday'],':';
    echo '</p>';
}

?>
<?php require 'footer.php'; ?>