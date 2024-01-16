<?php require 'header.php'; ?>
<h1>競走馬情報の登録</h1>
<form action="racehorse-output.php" method="post">
競走馬名:<input type="text" name="racehorse_name"><br>
父名:<input type="text" name="fathername"><br>
性別:<input type="text" name="gender"><br>
年月日:<input type="date" name="birthday"><br>

<button type="submit">追加</button>
</form>
<?php require 'footer.php'; ?>