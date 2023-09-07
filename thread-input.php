<?php session_start(); ?>
<?php require '../header.php'; ?>
<form action="thread-output.php" method="post">
    ログイン名<input type="text" name="login"><br>
    パスワード<input type="password" name="password"><br>
    <input type="submit" value="ログイン">
</form>
<?php require '../footer.php'; ?>