<?php include "connect.php" ?>

<html?>
<head><meta charset="UTF-8"></meta>
<script>
  function confirmDelete(username){
    var ans = confirm("ต้องการลบชื่อสมาชิก" + username);
    if(ans==true){
      document.location = "delete.php?username=" + username;
    }
  }
</script>
</head>
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
  
  <hr>
  <?php } ?>

</body>
</html>