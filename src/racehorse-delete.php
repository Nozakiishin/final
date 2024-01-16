<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<h1>競走馬情報の削除</h1>

<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from Racehorse') as $row){
        echo '<p>';
        echo $row['racehorse_id'],':競走馬名:';
        echo $row['racehorse_name'],':父名:';
        echo $row['fathername'],':性別:';
        echo $row['gender'],':年月日:';
        echo $row['birthday'];    
        echo '<a href="racehorse-delete-output?id=',$row['racehorse_id'],'">削除</a>';
        echo '</p>';

    
    }

?>

<?php require 'footer.php'; ?>