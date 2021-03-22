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
					<p>会員情報<a href="update.php?id='.$data["id"].'">更新はコチラ</a></p>
				</div>';
				echo '<p class="comp">こちらの会員情報を削除します</p>';
				echo '<table border="1" id="user-table">';
					echo '<tr>';
						echo '<th>ユーザーID</th><th>名前</th><th>パスワード</th><th>性別</th><th>年齢</th><th>メモ</th>';
					echo '</tr>';
					echo '<tr>';
						
						echo '<td>'.$data["userid"].'</td>';	
						echo '<td>'.$data["name"].'</td>';
						echo '<td>'.$data["password"].'</td>';
						if($data["gender"] == 0) {
							echo '<td>男</td>';
						} else {
							echo '<td>女</td>';
						}
						echo '<td>'.$data["old"].'歳</td>';
						echo '<td>'.$data["memo"].'</td>';
					echo '</tr>';
				echo '</table>';
				echo '<p class="comp">本当に削除してもよろしいですか？</p>';
				echo'<div id="confirm">
					<form action="delate_fin.php" method="get" class="confirm_btn">
						<button type="submit" class="btn_d">はい</button>
						<input type="hidden" name="id" value="'.$id.'">
					</form>
					<form action="home.php" method="post" class="confirm_btn">
						<button type="submit" class="btn_d">戻る</button>
						<input type="hidden" name="id" value="'.$id.'">
						<input type="hidden" name="userid" value="'.$data["userid"].'">
						<input type="hidden" name="password" value="'.$data["password"].'">
					</form>
				</div>';
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