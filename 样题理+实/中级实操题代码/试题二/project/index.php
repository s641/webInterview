<?php include_once "user.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<header>
		<div>
      <?php
      session_start();
      if (isset($_SESSION["user"])) {
        echo "欢迎 " . $_SESSION["user"];
      } else {
        echo "<a href='login.php'>未登录</a>";
      }
      ?> 
    </div>
	</header>
	<article>
    <?php
    $user = new User();
    $users = $user->queryAll();
    ?>
      <table border="1">
			<tr>
				<th>序号</th>
				<th>帐号</th>
				<th>密码</th>
				<th>手机号</th>
			</tr>
        <?php foreach($users as $u): ?>
        <tr>
        <td><?php echo $u["id"];?></td>
				<td><?php echo $u["account"];?></td>
				<td><?php echo $u["password"];?></td>
				<td><?php echo $u["telphone"];?></td>
			</tr>      
        <?php endforeach;?>
      </table>
	</article>
</body>
</html>
