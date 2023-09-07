<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php require '../header.php'; ?>
    </p>

    <?php
    echo $_REQUEST['id'];
    ?>
    <?php
    if ($_REQUEST['pass'] == 'pass') {
        echo 'ログインに成功しました。';
    } else {
        echo 'パスワードが違います';
    }
    ?>
</body>

</html>