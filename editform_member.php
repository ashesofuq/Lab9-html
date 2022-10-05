<?php include "connect.php" ?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="edit_member.php" method="POST">
         <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
        รหัสผ่าน: <input type="password" name="password" value="<?=$row["password"]?>"><br>
        ชื่อสมาชิก: <input type="text" name="name" value="<?=$row["name"]?>"><br>
        ที่อยู่: <br> <textarea name="address" cols="30" rows="3"><?=$row["address"]?></textarea><br>
        เบอร์โทร: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
        อีเมล: <input type="email" name="email" value="<?=$row["email"]?>"><br>
        <input type="submit" value="แก้ไขข้อมูล">
    </form>
</body>
</html>