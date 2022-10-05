<?php include "connect.php" ?>

<?php
$stmt = $pdo-> prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>

<html>
<head><meta charset="utf-8"></head>
<body>
  <form action="edit.php" method="post">
  <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
    password : <input type="text" name="password" value="<?=$row["password"]?>"><br>
    ชื่อสมาชิก : <input type="text" name="name" value="<?=$row["name"]?>"><br>
    address : <textarea name="address" cols="40" rows="3">  <?=$row["address"]?></textarea><br>
    mobile : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    email : <input type="email" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขชื่อสมาชิก">
  </form>

</body>
</html>