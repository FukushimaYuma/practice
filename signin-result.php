<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=practice;charset=utf8','root','mariadb');
$sql=$pdo->prepare('insert into user values(?,?)');

if($sql->execute([$_REQUEST['id']],$_REQUEST['pass'])){
    echo '登録に成功しました。';
}else{
    echo '登録に失敗しました。';
}
?>
<?php require '../footer.php'; ?>