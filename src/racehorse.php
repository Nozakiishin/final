<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<h1>競走馬の一覧</h1>
<?php
$pdo=new PDO($connect, USER, PASS);
foreach($pdo->query('select * from Racehorse') as $row){
    echo '<p>';
    echo $row['racehorse_id'],':競走馬名:';
    echo $row['racehorse_name'],'　父名:';
    echo $row['fathername'],'　性別:';
    echo $row['gender'],'　年月日:';
    echo $row['birthday'];    
    echo '</p>';
}

?>
    <form action="index.html" method="post">
        <button type="submit">ホームに戻る</button>
    </form>
<?php require 'footer.php'; ?>