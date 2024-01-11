<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
    <div class="th0">競走馬ID</div>
	<div class="th1">競走馬名</div>
	<div class="th1">父名</div>
    <div class="th1">性別</div>
	<div class="th1">年月日</div>

<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from Racehorse') as $row) {
		echo '<form action="racehorse-update-output.php" method="post">';

		echo '<input type="hidden" name="racehorse_id" value="',$row['raccehorse_id'],'">';

		echo '<div class="td0">',$row['racehorse_id'],'</div>';

		echo '<div class="td1">';
		echo '<input type="text" name="name" value"',$row['racehorse_name'],'">';
		echo '</div> ';

		echo '<div class="td1">';
		echo '<input type="text" name="price" value"',$row['fathername'],'">';
		echo '</div> ';

        echo '<div class="td1">';
		echo '<input type="text" name="name" value"',$row['gender'],'">';
		echo '</div> ';

		echo '<div class="td1">';
		echo '<input type="text" name="name" value"',$row['birthday'],'">';
		echo '</div> ';

        echo '<input type="hidden" name="id" value="',$row['category_id'],'">';

		echo '<div class="td0">',$row['category_id'],'</div>';

	    echo '<div class="td1">';
		echo '<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>
<?php require 'footer.php'; ?>