<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Racehorse where racehorse_id=?');
    if($sql->execute([$_GET['id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
?>

    <br><hr><br>

<?php
    foreach ($pdo->query('select * from Racehorse') as $row) {
        echo '<p>';
        echo $row['racehorse_id'],':競走馬名:';
        echo $row['racehorse_name'],':父名:';
        echo $row['fathername'],':性別:';
        echo $row['gender'],':年月日:';
        echo $row['birthday'];    
        echo '</p>';
    
    }
?> 
    <form action="index.html" method="post">
        <button type="submit">ホームに戻る</button>
    </form>

<?php require 'footer.php'; ?>