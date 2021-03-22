<?php
	$id = $_GET["id"];
	$db = mysqli_connect("localhost", "root", "admin", "user");
	$sql = "select * from userinfo where id=".$id;
	$result = mysqli_query($db, $sql);
	mysqli_close($db);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>バルサチャンネル</title>
		<link href="../css/homepage.css" rel="stylesheet" type="text/css">
		<div class="headimg">
			<div class="theme">
				<img src="../img/バルサエンブレム.png"  alt="Barcelona" height="100" width="100">
				<h2 class="theme-h">FOR the CULE</h2> 
			</div>
		</div>
	</head>
	<body>
		<img src="../img/img-studium.jpg" alt="studium" height="500" width="100%">
		<?php
			while($data = mysqli_fetch_assoc($result)) {
				echo '<ui class="nav">
					<li><a href="myhome.php?id='.$data["id"].'" class="home">HOME</a></li>
					<li><a href="match.php?id='.$data["id"].'" class="match">試合日程</a></li>
					<li><a href="contact.php?id='.$data["id"].'" class="contact">問い合わせ</a></li>
				</ui>';
				echo '<div class="member">
					<p>会員情報<a href="delate.php?id='.$data["id"].'">削除はコチラ</a></p>
				</div>';
				echo'<div class="toiawase">';
					echo '<h2 class="contact-h2">会員情報変更</h2>';
					echo '<form action="update_fin.php" method="post" class="contactform">';
						echo '<label for="userid" class="form-detail">ユーザーID(必須)</label>';
						echo '<input type="text" class="form-group1" required id="" name="userid" value="'.$data["userid"].'">';
						echo '<label for="password" class="form-detail">パスワード(必須)</label>';
						echo '<input type="password" class="form-group1" required id="password" name="password" value="'.$data["password"].'">';
						echo '<label for="name" class="form-detail">名前(必須)</label>';
						echo '<input type="text" class="form-group1" required id="name" name="name" value="'.$data["name"].'">';
						echo '<label for="gender" class="form-detail2">性別:</label>';
						if($data["gender"] == 0) {
							echo '<input type="radio" name="gender" value="0" class="form-group3" checked=checked>男';
							echo '<input type="radio" name="gender" value="1 class="form-group3">女<br>';
						} else {
							echo '<input type="radio" name="gender" value="0" class="form-group3">男';
							echo '<input type="radio" name="gender" value="1" class="form-group3" checked=checked>女<br>';
						}
						echo '<label for="old" class="form-detail">年齢(必須)</label>';
						echo '<input type="text" class="form-group1" required id="old" name="old" value="'.$data["old"].'">';
						echo '<label for="memo" class="form-detail">メモ</label>';
						echo '<textarea name="memo" class="form-group2" rows="5" cols="40" maxlength="800">'.$data["memo"].'</textarea>';
						echo '<input type="hidden" name="id" value="'.$id.'">';
						echo '<input type="submit" class="btn" value="更新">';
					echo '</form>';
				echo'</div>';
			}
		?>
		<div class="footer">
			<div class="footer1">
				<h3>バルサ公式</h3>
				<p>
					<img src="../img/check.png" alt="official" height="15px" width="15px">
					公式サイトは<a href="https://www.fcbarcelona.jp/ja/">こちら</a>
				</p>
				<p>
					<img src="../img/インスタ.png" alt="insta" height="15px" width="15px">
					公式インスタグラムは<a href="https://www.instagram.com/fcbarcelona/?hl=ja">こちら</a>
				</p>
				<p>
					<img src="../img/twitter.png" alt="twi" height="15px" width="15px">
					公式ツイッターは<a href="https://twitter.com/fcbarcelona_jp?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">こちら</a>
				</p>
				<div class="footer2">
					<h3>ニュース</h3>
					<p>
						<img src="../img/チェックマーク.jpg" height="15px" width="15px">
						<a href="https://web.gekisaka.jp/news/detail/?322515-322515-fl" style="text-decoration:none;">
							公式戦一発レッドのメッシ。公式戦出場停止か。。。
						</a>
					</p>
					<p>
						<img src="../img/チェックマーク.jpg" height="15px" width="15px">
						<a href="https://www.soccerdigestweb.com/news/detail/id=85086" style="text-decoration:none;">
							バルサ決勝でビルバオに敗れる。。。
						</a>
					</p>
					<p>
						<img src="../img/チェックマーク.jpg" height="15px" width="15px">
						<a href="https://www.footballchannel.jp/2021/01/20/post406727/" style="text-decoration:none;">
							米国代表DFデスト、ケガで国王杯厳しいか。。。
						</a>
					</p>
				</div>
			</div>
			<div class="footer3">
				<img src="../img/footer_img.jpg" class="fot_img">
			</div>
		</div>
		<div class="bottom">
			<p>～UltimateProgram～</p>
		</div>
	</body>
</html>