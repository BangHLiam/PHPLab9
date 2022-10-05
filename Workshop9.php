<?php include "connect.php" ?>

<html?>
<head><meta charset="UTF-8"></meta>
</head>
<script>
  function confirmDelete(username){
    var ans = confirm("ต้องการลบชื่อสมาชิก" + username);
    if(ans==true){
      document.location = "delete.php?username=" + username;
    }
  }
</script>
<body>

<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();


while($row = $stmt->fetch()){
  ?>
  
  ชื่อสมาชิก : <?=$row["name"]?><br>
  ที่อยู่ : <?=$row["address"]?><br>
  อีเมล์ : <?=$row["email"]?><br>
  
  <a href="#" onclick='confirmDelete("<?=$row["username"]?>")'>ลบ</a>
  <a href="editform.php?username=<?=$row["username"]?>">แก้ไข</a>
  
  <hr>
  <?php } ?>

</body>
</html>