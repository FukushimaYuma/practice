<?php require '../header.php'; ?>
<h1>入力フォーム</h1>
<p>本を管理します。</p>
<div class="th0">商品番号</div>
<div class="th1">商品名</div>
<div class="th1">価格</div><br>
<?php 
$pdo=new PDO('mysql:host=localhost;dbname=book library;charset=utf8','staff','password');
foreach($pdo->query('select*from product')as $row){
    echo '<form class="id" action="library-output.php" method="post">';
    echo '<input type="hidden" name="command" value="update">';
    echo '<input type="hidden" name="id" value="',$row['id'],'">';
    
    echo'</form><br>';
}
?>
<form action="library-output.php" method="post">
<input type="hidden" name="command" value="insert">
<div class="td0"></div>
<div class="td1"><input type="text" name="name"></div>
<div class="td1"><input type="text" name="price"></div>
<div class="td2"><input type="submit" value="追加"></div>
</form><br>
<?php require '../footer.php'; ?>