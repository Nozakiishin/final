<?php require 'header.php'; ?>
<p>競走馬情報を登録します</p>
<form action="racehorse_output.php" method="post">
競走馬名<input type="text" name="recehorse_name"><br>
父名<input type="text" name="fathername"><br>
性別<input type="text" name="gender"><br>
年月日<input type="date" name="birthday"><br>

<button type="submit">追加</button>
</form>
<?php require 'footer.php'; ?>