<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<h1>競走馬情報の削除</h1>

<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from Racehorse') as $row){
        echo $row['racehorse_id'];
        echo $row['racehorse_name'];
        echo $row['fathername'];
        echo $row['gender'];
        echo $row['birthday'];
             $row['category_id'];
        echo '<a href="racehorse-delete-output?id=',$row['racehorse_id'],'">削除</a>';

    
    }

?>

<?php require 'footer.php'; ?>