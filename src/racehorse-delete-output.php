<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Racehorse where racehorse_id=?');
    if($sql->execute([$_GET['racehorse_id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
?>

    <br><hr><br>

<?php
    foreach ($pdo->query('select * from Racehorse') as $row) {
        echo '<p>';
        echo $row['racehorse_id'],':';
        echo $row['racehorse_name'],':';
        echo $row['fathername'],':';
        echo $row['gender'],':';
        echo $row['birthday'],':';
        echo '</p>';
    
    }
?> 

<?php require 'footer.php'; ?>