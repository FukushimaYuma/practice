<?php require '../header.php'; ?>
<p>新規登録用フォーム</p>
<form action="signin-result.php" method="post">
    id<input type="text" name="id" >
    パスワード <input type="text" name="pass">
    <input type="submit" value="登録">
</form>
<?php require '../footer.php'; ?>