<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<h1>競走馬情報の更新</h1>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from Racehorse') as $row) {
		echo '<form action="racehorse-update-output.php" method="post">';

		echo '<input type="hidden" name="racehorse_id" value="',$row['racehorse_id'],'">';

		echo '<p>';
	
		echo '<div class="td0">',$row['racehorse_id'],'</div>';

		echo '競走馬名:';
		echo $row['racehorse_name'],'　父名:';
		echo $row['fathername'],'　性別:';
		echo $row['gender'],'　年月日:';
		echo $row['birthday'];    
		echo '</p>';

		echo '<div class="td1">';
		echo '競走馬名:<input type="text" name="racehorse_name" value"',$row['racehorse_name'],'">';
		echo '</div> ';

		echo '<div class="td1">';
		echo '父名:<input type="text" name="fathername" value"',$row['fathername'],'">';
		echo '</div> ';

        echo '<div class="td1">';
		echo '性別:<input type="text" name="gender" value"',$row['gender'],'">';
		echo '</div> ';

		echo '<div class="td1">';
		echo '年月日:<input type="date" name="birthday" value"',$row['birthday'],'">';
		echo '</div> ';

	    echo '<div class="td1">';
		echo '<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		
		echo "\n";
	}
?>
<?php require 'footer.php'; ?>